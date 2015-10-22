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
 * IndexController
 *
 * Handles the IndexController requests for the AuthorAdmin Module
 *
 * @package AuthorAdmin\Controller
 */
class IndexController extends AbstractActionController
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
     * Index action for IndexController
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $authorList = $this->authorRepository->getAllEntities();

        $viewModel = new ViewModel(
            [
                'authorList' => $authorList,
            ]
        );

        return $viewModel;
    }


}
