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
 * ShowController
 *
 * Handles the ShowController requests for the ArticleAdmin Module
 *
 * @package ArticleAdmin\Controller
 */
class ShowController extends AbstractActionController
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
     * Index action for ShowController
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $id = $this->params()->fromRoute('id');

        if (!$id) {
            $this->flashMessenger()->addErrorMessage('article_admin_message_article_not_found');
            
            return $this->redirect()->toRoute('article-admin');
        }

        $articleEntity = $this->articleRepository->getEntityById($id);

        if (!$articleEntity) {
            $this->flashMessenger()->addErrorMessage('article_admin_message_article_not_found');
            
            return $this->redirect()->toRoute('article-admin');
        }

        $viewModel = new ViewModel(
            [
                'articleEntity' => $articleEntity,
            ]
        );

        return $viewModel;
    }


}
