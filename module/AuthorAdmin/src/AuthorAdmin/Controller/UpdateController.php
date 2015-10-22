<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace AuthorAdmin\Controller;

use AuthorAdmin\Form\AuthorDataForm;
use BlogDomain\Model\Repository\AuthorRepository;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use BlogDomain\Model\Entity\AuthorEntity;

/**
 * UpdateController
 *
 * Handles the UpdateController requests for the AuthorAdmin Module
 *
 * @package AuthorAdmin\Controller
 */
class UpdateController extends AbstractActionController
{

    /**
     * @var AuthorRepository
     */
    private $authorRepository = null;

    /**
     * @var AuthorDataForm
     */
    private $authorDataForm = null;

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
     * Set AuthorDataForm
     *
     * @param AuthorDataForm $authorDataForm
     */
    public function setAuthorDataForm(AuthorDataForm $authorDataForm)
    {
        $this->authorDataForm = $authorDataForm;
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
            $this->flashMessenger()->addErrorMessage('author_admin_message_author_not_found');
            
            return $this->redirect()->toRoute('author-admin');
        }

        $authorEntity = $this->authorRepository->getEntityById($id);

        if (!$authorEntity) {
            $this->flashMessenger()->addErrorMessage('author_admin_message_author_not_found');
            
            return $this->redirect()->toRoute('author-admin');
        }

        $authorDataForm = $this->authorDataForm;
        $authorDataForm->bind($authorEntity);

        if ($this->params()->fromPost('save_author')) {
            $authorDataForm->setData($this->params()->fromPost());
            
            if ($authorDataForm->isValid()) {
                if ($this->authorRepository->saveEntity($authorEntity)) {
                    $this->flashMessenger()->addSuccessMessage('author_admin_message_author_saving_success');
                    
                    return $this->redirect()->toRoute('author-admin');
                } else {
                    $this->flashMessenger()->addErrorMessage('author_admin_message_author_saving_failed');
                }
            } else {
                $this->flashMessenger()->addErrorMessage('author_admin_message_author_data_invalid');
            }
            
            $authorDataForm->setData($this->params()->fromPost());
        }

        $viewModel = new ViewModel(
            [
                'authorEntity' => $authorEntity,
                'authorDataForm' => $authorDataForm,
            ]
        );

        return $viewModel;
    }


}
