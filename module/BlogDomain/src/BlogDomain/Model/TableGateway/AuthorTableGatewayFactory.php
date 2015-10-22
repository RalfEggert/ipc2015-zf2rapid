<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\TableGateway;

use BlogDomain\Model\Entity\AuthorEntity;
use BlogDomain\Model\Hydrator\AuthorHydrator;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\HydratorPluginManager;

/**
 * AuthorTableGatewayFactory
 *
 * Creates an instance of AuthorTableGateway
 *
 * @package BlogDomain\Model\TableGateway
 */
class AuthorTableGatewayFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return AuthorTableGateway
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var HydratorPluginManager $hydratorManager */
        $hydratorManager = $serviceLocator->get('HydratorManager');

        /** @var AdapterInterface $dbAdapter */
        $dbAdapter = $serviceLocator->get('Zend\Db\Adapter\Adapter');

        /** @var AuthorHydrator $hydrator */
        $hydrator  = $hydratorManager->get('BlogDomain\Author');
        $entity    = new AuthorEntity();
        $resultSet = new HydratingResultSet($hydrator, $entity);

        $instance = new AuthorTableGateway(
            'author', $dbAdapter, null, $resultSet
        );
        $instance->setHydrator($hydrator);
        $instance->setPrimaryKey('author.id');

        return $instance;
    }


}
