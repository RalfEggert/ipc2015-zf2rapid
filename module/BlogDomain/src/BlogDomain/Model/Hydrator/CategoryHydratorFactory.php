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

/**
 * CategoryHydratorFactory
 *
 * Creates an instance of CategoryHydrator
 *
 * @package BlogDomain\Model\Hydrator
 */
class CategoryHydratorFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $hydratorManager
     * @return CategoryHydrator
     */
    public function createService(ServiceLocatorInterface $hydratorManager)
    {
        $serviceLocator = $hydratorManager->getServiceLocator();

        $instance = new CategoryHydrator();

        return $instance;
    }


}
