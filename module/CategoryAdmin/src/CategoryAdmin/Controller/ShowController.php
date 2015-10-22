<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace CategoryAdmin\Controller;

use BlogDomain\Model\Repository\CategoryRepository;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * ShowController
 *
 * Handles the ShowController requests for the CategoryAdmin Module
 *
 * @package CategoryAdmin\Controller
 */
class ShowController extends AbstractActionController
{

    /**
     * @var CategoryRepository
     */
    private $categoryRepository = null;

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
     * Index action for ShowController
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

        $viewModel = new ViewModel(
            [
                'categoryEntity' => $categoryEntity,
            ]
        );

        return $viewModel;
    }


}
