<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace CategoryAdmin\Controller;

use CategoryAdmin\Form\CategoryDeleteForm;
use BlogDomain\Model\Repository\CategoryRepository;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * DeleteController
 *
 * Handles the DeleteController requests for the CategoryAdmin Module
 *
 * @package CategoryAdmin\Controller
 */
class DeleteController extends AbstractActionController
{

    /**
     * @var CategoryRepository
     */
    private $categoryRepository = null;

    /**
     * @var CategoryDeleteForm
     */
    private $categoryDeleteForm = null;

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
     * Set CategoryDeleteForm
     *
     * @param CategoryDeleteForm $categoryDeleteForm
     */
    public function setCategoryDeleteForm(CategoryDeleteForm $categoryDeleteForm)
    {
        $this->categoryDeleteForm = $categoryDeleteForm;
    }

    /**
     * Index action for DeleteController
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $id = $this->params()->fromRoute('id');

        if (!$id) {
            $this->flashMessenger()->addErrorMessage('category_admin_message_category_not_found');
            
            return $this->redirect()->toRoute('category-admin');
        }

        $categoryEntity = $this->categoryRepository->getEntityById($id);

        if (!$categoryEntity) {
            $this->flashMessenger()->addErrorMessage('category_admin_message_category_not_found');
            
            return $this->redirect()->toRoute('category-admin');
        }

        $categoryDeleteForm = $this->categoryDeleteForm;

        if ($this->params()->fromPost('delete_category')) {
            if ($this->categoryRepository->removeEntity($categoryEntity)) {
                $this->flashMessenger()->addSuccessMessage('category_admin_message_category_deleting_success');
                
                return $this->redirect()->toRoute('category-admin');
            } else {
                $this->flashMessenger()->addErrorMessage('category_admin_message_category_deleting_failed');
            }
        } else {
            $this->flashMessenger()->addInfoMessage('category_admin_message_category_deleting_possible');
        }

        $viewModel = new ViewModel(
            [
                'categoryEntity' => $categoryEntity,
                'categoryDeleteForm' => $categoryDeleteForm,
            ]
        );

        return $viewModel;
    }


}
