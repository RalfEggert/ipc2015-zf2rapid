<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace AuthorAdmin\Controller;

use BlogDomain\Model\Repository\AuthorRepository;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * ShowControllerFactory
 *
 * Creates an instance of ShowController
 *
 * @package AuthorAdmin\Controller
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

        /** @var AuthorRepository $authorRepository */
        $authorRepository = $serviceLocator->get('BlogDomain\Model\Repository\Author');

        $instance = new ShowController();
        $instance->setAuthorRepository($authorRepository);

        return $instance;
    }


}
