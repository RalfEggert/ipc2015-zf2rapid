<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\Repository;

use BlogDomain\Model\TableGateway\AuthorTableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * AuthorRepositoryFactory
 *
 * Creates an instance of AuthorRepository
 *
 * @package BlogDomain\Model\Repository
 */
class AuthorRepositoryFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return AuthorRepository
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var AuthorTableGateway $tableGateway */
        $tableGateway = $serviceLocator->get('BlogDomain\Model\TableGateway\Author');

        $instance = new AuthorRepository($tableGateway);

        return $instance;
    }


}
