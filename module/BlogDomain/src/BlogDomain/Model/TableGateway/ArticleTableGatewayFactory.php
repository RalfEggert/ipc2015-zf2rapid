<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\TableGateway;

use BlogDomain\Model\Entity\ArticleEntity;
use BlogDomain\Model\Hydrator\ArticleHydrator;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\HydratorPluginManager;

/**
 * ArticleTableGatewayFactory
 *
 * Creates an instance of ArticleTableGateway
 *
 * @package BlogDomain\Model\TableGateway
 */
class ArticleTableGatewayFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return ArticleTableGateway
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var HydratorPluginManager $hydratorManager */
        $hydratorManager = $serviceLocator->get('HydratorManager');

        /** @var AdapterInterface $dbAdapter */
        $dbAdapter = $serviceLocator->get('Zend\Db\Adapter\Adapter');

        /** @var ArticleHydrator $hydrator */
        $hydrator  = $hydratorManager->get('BlogDomain\Article');
        $entity    = new ArticleEntity();
        $resultSet = new HydratingResultSet($hydrator, $entity);

        $instance = new ArticleTableGateway(
            'article', $dbAdapter, null, $resultSet
        );
        $instance->setHydrator($hydrator);
        $instance->setPrimaryKey('article.id');

        return $instance;
    }


}
