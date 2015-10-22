<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\Repository;

use BlogDomain\Model\TableGateway\ArticleTableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * ArticleRepositoryFactory
 *
 * Creates an instance of ArticleRepository
 *
 * @package BlogDomain\Model\Repository
 */
class ArticleRepositoryFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return ArticleRepository
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var ArticleTableGateway $tableGateway */
        $tableGateway = $serviceLocator->get('BlogDomain\Model\TableGateway\Article');

        $instance = new ArticleRepository($tableGateway);

        return $instance;
    }


}
