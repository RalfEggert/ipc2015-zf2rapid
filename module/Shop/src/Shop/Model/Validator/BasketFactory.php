<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace Shop\Model\Validator;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * BasketFactory
 *
 * Creates an instance of Basket
 *
 * @package Shop\Model\Validator
 */
class BasketFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $validatorManager
     * @return Basket
     */
    public function createService(ServiceLocatorInterface $validatorManager)
    {
        $serviceLocator = $validatorManager->getServiceLocator();

        $instance = new Basket();

        return $instance;
    }


}
