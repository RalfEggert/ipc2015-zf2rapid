<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace ArticleAdmin\Controller;

use ArticleAdmin\Form\ArticleDeleteForm;
use BlogDomain\Model\Repository\ArticleRepository;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * DeleteController
 *
 * Handles the DeleteController requests for the ArticleAdmin Module
 *
 * @package ArticleAdmin\Controller
 */
class DeleteController extends AbstractActionController
{

    /**
     * @var ArticleRepository
     */
    private $articleRepository = null;

    /**
     * @var ArticleDeleteForm
     */
    private $articleDeleteForm = null;

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
     * Set ArticleDeleteForm
     *
     * @param ArticleDeleteForm $articleDeleteForm
     */
    public function setArticleDeleteForm(ArticleDeleteForm $articleDeleteForm)
    {
        $this->articleDeleteForm = $articleDeleteForm;
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
            $this->flashMessenger()->addErrorMessage('article_admin_message_article_not_found');
            
            return $this->redirect()->toRoute('article-admin');
        }

        $articleEntity = $this->articleRepository->getEntityById($id);

        if (!$articleEntity) {
            $this->flashMessenger()->addErrorMessage('article_admin_message_article_not_found');
            
            return $this->redirect()->toRoute('article-admin');
        }

        $articleDeleteForm = $this->articleDeleteForm;

        if ($this->params()->fromPost('delete_article')) {
            if ($this->articleRepository->removeEntity($articleEntity)) {
                $this->flashMessenger()->addSuccessMessage('article_admin_message_article_deleting_success');
                
                return $this->redirect()->toRoute('article-admin');
            } else {
                $this->flashMessenger()->addErrorMessage('article_admin_message_article_deleting_failed');
            }
        } else {
            $this->flashMessenger()->addInfoMessage('article_admin_message_article_deleting_possible');
        }

        $viewModel = new ViewModel(
            [
                'articleEntity' => $articleEntity,
                'articleDeleteForm' => $articleDeleteForm,
            ]
        );

        return $viewModel;
    }


}
