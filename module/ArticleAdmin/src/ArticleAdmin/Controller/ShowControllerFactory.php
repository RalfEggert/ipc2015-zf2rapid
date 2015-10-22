<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace ArticleAdmin\Controller;

use BlogDomain\Model\Repository\ArticleRepository;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * ShowControllerFactory
 *
 * Creates an instance of ShowController
 *
 * @package ArticleAdmin\Controller
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

        /** @var ArticleRepository $articleRepository */
        $articleRepository = $serviceLocator->get('BlogDomain\Model\Repository\Article');

        $instance = new ShowController();
        $instance->setArticleRepository($articleRepository);

        return $instance;
    }


}
