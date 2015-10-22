<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\Hydrator;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use BlogDomain\Model\Hydrator\Strategy\CategoryStrategy;
use BlogDomain\Model\Hydrator\Strategy\AuthorStrategy;

/**
 * ArticleHydratorFactory
 *
 * Creates an instance of ArticleHydrator
 *
 * @package BlogDomain\Model\Hydrator
 */
class ArticleHydratorFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $hydratorManager
     * @return ArticleHydrator
     */
    public function createService(ServiceLocatorInterface $hydratorManager)
    {
        $serviceLocator = $hydratorManager->getServiceLocator();

        $instance = new ArticleHydrator();
        $instance->addStrategy('category', new CategoryStrategy());
        $instance->addStrategy('author', new AuthorStrategy());

        return $instance;
    }


}
