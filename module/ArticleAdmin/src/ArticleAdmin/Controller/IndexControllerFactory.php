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
 * IndexControllerFactory
 *
 * Creates an instance of IndexController
 *
 * @package ArticleAdmin\Controller
 */
class IndexControllerFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $controllerManager
     * @return IndexController
     */
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        $serviceLocator = $controllerManager->getServiceLocator();

        /** @var ArticleRepository $articleRepository */
        $articleRepository = $serviceLocator->get('BlogDomain\Model\Repository\Article');

        $instance = new IndexController();
        $instance->setArticleRepository($articleRepository);

        return $instance;
    }


}
