<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\InputFilter;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * CategoryInputFilterFactory
 *
 * Creates an instance of CategoryInputFilter
 *
 * @package BlogDomain\Model\InputFilter
 */
class CategoryInputFilterFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $inputFilterManager
     * @return CategoryInputFilter
     */
    public function createService(ServiceLocatorInterface $inputFilterManager)
    {
        $serviceLocator = $inputFilterManager->getServiceLocator();

        $instance = new CategoryInputFilter();

        return $instance;
    }


}
