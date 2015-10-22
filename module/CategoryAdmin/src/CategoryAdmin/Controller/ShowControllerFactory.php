<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace CategoryAdmin\Controller;

use BlogDomain\Model\Repository\CategoryRepository;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * ShowControllerFactory
 *
 * Creates an instance of ShowController
 *
 * @package CategoryAdmin\Controller
 */
class ShowControllerFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $controllerManager
     * @return ShowController
     */
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        $serviceLocator = $controllerManager->getServiceLocator();

        /** @var CategoryRepository $categoryRepository */
        $categoryRepository = $serviceLocator->get('BlogDomain\Model\Repository\Category');

        $instance = new ShowController();
        $instance->setCategoryRepository($categoryRepository);

        return $instance;
    }


}
