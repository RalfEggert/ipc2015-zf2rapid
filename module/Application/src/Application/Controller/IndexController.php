<?php
/**
 * ZF2rapid skeleton application
 * 
 * @package    Application
 * @link      https://github.com/ZFrapid/zf2rapid-skeleton
 * @copyright Copyright (c) 2014 - 2015 Ralf Eggert
 * @license   http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/**
 * namespace definition and usage
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Index controller
 * 
 * Handles the homepage and other pages
 * 
 * @package    Application
 */
class IndexController extends AbstractActionController
{
    /**
     * Handle homepage
     */
    public function indexAction()
    {
        return new ViewModel();
    }
}
