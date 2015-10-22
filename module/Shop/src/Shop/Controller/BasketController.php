<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace Shop\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * BasketController
 *
 * Handles the BasketController requests for the Shop Module
 *
 * @package Shop\Controller
 */
class BasketController extends AbstractActionController
{

    /**
     * Index action for BasketController
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $viewModel = new ViewModel();

        return $viewModel;
    }

    /**
     * Show action for BasketController
     *
     * @return ViewModel
     */
    public function showAction()
    {
        $viewModel = new ViewModel();

        return $viewModel;
    }


}
