<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace AuthorAdmin\Controller;

use BlogDomain\Model\Repository\AuthorRepository;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * ShowController
 *
 * Handles the ShowController requests for the AuthorAdmin Module
 *
 * @package AuthorAdmin\Controller
 */
class ShowController extends AbstractActionController
{

    /**
     * @var AuthorRepository
     */
    private $authorRepository = null;

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
     * Index action for ShowController
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

        $viewModel = new ViewModel(
            [
                'authorEntity' => $authorEntity,
            ]
        );

        return $viewModel;
    }


}
