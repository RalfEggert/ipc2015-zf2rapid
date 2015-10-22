<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace CategoryAdmin\Controller;

use CategoryAdmin\Form\CategoryDataForm;
use BlogDomain\Model\Repository\CategoryRepository;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use BlogDomain\Model\Entity\CategoryEntity;

/**
 * CreateController
 *
 * Handles the CreateController requests for the CategoryAdmin Module
 *
 * @package CategoryAdmin\Controller
 */
class CreateController extends AbstractActionController
{

    /**
     * @var CategoryRepository
     */
    private $categoryRepository = null;

    /**
     * @var CategoryDataForm
     */
    private $categoryDataForm = null;

    /**
     * Set CategoryRepository
     *
     * @param CategoryRepository $categoryRepository
     */
    public function setCategoryRepository(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Set CategoryDataForm
     *
     * @param CategoryDataForm $categoryDataForm
     */
    public function setCategoryDataForm(CategoryDataForm $categoryDataForm)
    {
        $this->categoryDataForm = $categoryDataForm;
    }

    /**
     * Index action for CreateController
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $categoryDataForm = $this->categoryDataForm;

        if ($this->params()->fromPost('save_category')) {
            $categoryEntity = new CategoryEntity();
            
            $categoryDataForm->setData($this->params()->fromPost());
            $categoryDataForm->bind($categoryEntity);
            
            if ($categoryDataForm->isValid()) {
                if ($this->categoryRepository->saveEntity($categoryEntity)) {
                    $this->flashMessenger()->addSuccessMessage('category_admin_message_category_saving_success');
                    
                    return $this->redirect()->toRoute('category-admin');
                } else {
                    $this->flashMessenger()->addErrorMessage('category_admin_message_category_saving_failed');
                }
            } else {
                $this->flashMessenger()->addErrorMessage('category_admin_message_category_data_invalid');
            }
            
            $categoryDataForm->setData($this->params()->fromPost());
        }

        $viewModel = new ViewModel(
            [
                'categoryDataForm' => $categoryDataForm,
            ]
        );

        return $viewModel;
    }


}
