<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\Repository;

use BlogDomain\Model\TableGateway\CategoryTableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * CategoryRepositoryFactory
 *
 * Creates an instance of CategoryRepository
 *
 * @package BlogDomain\Model\Repository
 */
class CategoryRepositoryFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return CategoryRepository
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var CategoryTableGateway $tableGateway */
        $tableGateway = $serviceLocator->get('BlogDomain\Model\TableGateway\Category');

        $instance = new CategoryRepository($tableGateway);

        return $instance;
    }


}
