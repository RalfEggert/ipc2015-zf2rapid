<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace ArticleAdmin\Controller;

use BlogDomain\Model\Repository\ArticleRepository;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * IndexController
 *
 * Handles the IndexController requests for the ArticleAdmin Module
 *
 * @package ArticleAdmin\Controller
 */
class IndexController extends AbstractActionController
{

    /**
     * @var ArticleRepository
     */
    private $articleRepository = null;

    /**
     * Set ArticleRepository
     *
     * @param ArticleRepository $articleRepository
     */
    public function setArticleRepository(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * Index action for IndexController
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $articleList = $this->articleRepository->getAllEntities();

        $viewModel = new ViewModel(
            [
                'articleList' => $articleList,
            ]
        );

        return $viewModel;
    }


}
