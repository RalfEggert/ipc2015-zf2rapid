<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace ArticleAdmin\Controller;

use ArticleAdmin\Form\ArticleDataForm;
use BlogDomain\Model\Repository\ArticleRepository;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use BlogDomain\Model\Entity\ArticleEntity;

/**
 * UpdateController
 *
 * Handles the UpdateController requests for the ArticleAdmin Module
 *
 * @package ArticleAdmin\Controller
 */
class UpdateController extends AbstractActionController
{

    /**
     * @var ArticleRepository
     */
    private $articleRepository = null;

    /**
     * @var ArticleDataForm
     */
    private $articleDataForm = null;

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
     * Set ArticleDataForm
     *
     * @param ArticleDataForm $articleDataForm
     */
    public function setArticleDataForm(ArticleDataForm $articleDataForm)
    {
        $this->articleDataForm = $articleDataForm;
    }

    /**
     * Index action for UpdateController
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

        $articleDataForm = $this->articleDataForm;
        $articleDataForm->bind($articleEntity);

        if ($this->params()->fromPost('save_article')) {
            $articleDataForm->setData($this->params()->fromPost());
            
            if ($articleDataForm->isValid()) {
                if ($this->articleRepository->saveEntity($articleEntity)) {
                    $this->flashMessenger()->addSuccessMessage('article_admin_message_article_saving_success');
                    
                    return $this->redirect()->toRoute('article-admin');
                } else {
                    $this->flashMessenger()->addErrorMessage('article_admin_message_article_saving_failed');
                }
            } else {
                $this->flashMessenger()->addErrorMessage('article_admin_message_article_data_invalid');
            }
            
            $articleDataForm->setData($this->params()->fromPost());
        }

        $viewModel = new ViewModel(
            [
                'articleEntity' => $articleEntity,
                'articleDataForm' => $articleDataForm,
            ]
        );

        return $viewModel;
    }


}
