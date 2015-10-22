<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace AuthorAdmin\Controller;

use AuthorAdmin\Form\AuthorDeleteForm;
use BlogDomain\Model\Repository\AuthorRepository;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * DeleteController
 *
 * Handles the DeleteController requests for the AuthorAdmin Module
 *
 * @package AuthorAdmin\Controller
 */
class DeleteController extends AbstractActionController
{

    /**
     * @var AuthorRepository
     */
    private $authorRepository = null;

    /**
     * @var AuthorDeleteForm
     */
    private $authorDeleteForm = null;

    /**
     * Set AuthorRepository
     *
     * @param AuthorRepository $authorRepository
     */
    public function setAuthorRepository(AuthorRepository $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    /**
     * Set AuthorDeleteForm
     *
     * @param AuthorDeleteForm $authorDeleteForm
     */
    public function setAuthorDeleteForm(AuthorDeleteForm $authorDeleteForm)
    {
        $this->authorDeleteForm = $authorDeleteForm;
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
            $this->flashMessenger()->addErrorMessage('author_admin_message_author_not_found');
            
            return $this->redirect()->toRoute('author-admin');
        }

        $authorEntity = $this->authorRepository->getEntityById($id);

        if (!$authorEntity) {
            $this->flashMessenger()->addErrorMessage('author_admin_message_author_not_found');
            
            return $this->redirect()->toRoute('author-admin');
        }

        $authorDeleteForm = $this->authorDeleteForm;

        if ($this->params()->fromPost('delete_author')) {
            if ($this->authorRepository->removeEntity($authorEntity)) {
                $this->flashMessenger()->addSuccessMessage('author_admin_message_author_deleting_success');
                
                return $this->redirect()->toRoute('author-admin');
            } else {
                $this->flashMessenger()->addErrorMessage('author_admin_message_author_deleting_failed');
            }
        } else {
            $this->flashMessenger()->addInfoMessage('author_admin_message_author_deleting_possible');
        }

        $viewModel = new ViewModel(
            [
                'authorEntity' => $authorEntity,
                'authorDeleteForm' => $authorDeleteForm,
            ]
        );

        return $viewModel;
    }


}
