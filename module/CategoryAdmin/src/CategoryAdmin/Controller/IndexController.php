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
 * IndexController
 *
 * Handles the IndexController requests for the CategoryAdmin Module
 *
 * @package CategoryAdmin\Controller
 */
class IndexController extends AbstractActionController
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
     * Index action for IndexController
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $categoryList = $this->categoryRepository->getAllEntities();

        $viewModel = new ViewModel(
            [
                'categoryList' => $categoryList,
            ]
        );

        return $viewModel;
    }


}
