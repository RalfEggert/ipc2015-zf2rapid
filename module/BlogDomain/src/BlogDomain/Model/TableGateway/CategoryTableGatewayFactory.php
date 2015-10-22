<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\TableGateway;

use BlogDomain\Model\Entity\CategoryEntity;
use BlogDomain\Model\Hydrator\CategoryHydrator;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\HydratorPluginManager;

/**
 * CategoryTableGatewayFactory
 *
 * Creates an instance of CategoryTableGateway
 *
 * @package BlogDomain\Model\TableGateway
 */
class CategoryTableGatewayFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return CategoryTableGateway
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var HydratorPluginManager $hydratorManager */
        $hydratorManager = $serviceLocator->get('HydratorManager');

        /** @var AdapterInterface $dbAdapter */
        $dbAdapter = $serviceLocator->get('Zend\Db\Adapter\Adapter');

        /** @var CategoryHydrator $hydrator */
        $hydrator  = $hydratorManager->get('BlogDomain\Category');
        $entity    = new CategoryEntity();
        $resultSet = new HydratingResultSet($hydrator, $entity);

        $instance = new CategoryTableGateway(
            'category', $dbAdapter, null, $resultSet
        );
        $instance->setHydrator($hydrator);
        $instance->setPrimaryKey('category.id');

        return $instance;
    }


}
