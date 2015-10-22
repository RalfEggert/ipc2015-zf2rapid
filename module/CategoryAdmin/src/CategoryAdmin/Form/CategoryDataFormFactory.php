<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace CategoryAdmin\Form;

use BlogDomain\Model\Hydrator\CategoryHydrator;
use BlogDomain\Model\InputFilter\CategoryInputFilter;
use Zend\InputFilter\InputFilterPluginManager;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\HydratorPluginManager;

/**
 * CategoryDataFormFactory
 *
 * Creates an instance of CategoryDataForm
 *
 * @package CategoryAdmin\Form
 */
class CategoryDataFormFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $formElementManager
     * @return CategoryDataForm
     */
    public function createService(ServiceLocatorInterface $formElementManager)
    {
        $serviceLocator = $formElementManager->getServiceLocator();

        /** @var HydratorPluginManager $hydratorManager */
        $hydratorManager = $serviceLocator->get('HydratorManager');

        /** @var InputFilterPluginManager $inputFilterManager */
        $inputFilterManager = $serviceLocator->get('InputFilterManager');

        /** @var CategoryHydrator $hydrator */
        $hydrator  = $hydratorManager->get('BlogDomain\Category');

        /** @var CategoryInputFilter $inputFilter */
        $inputFilter  = $inputFilterManager->get('BlogDomain\Category');

        $instance = new CategoryDataForm();
        $instance->setHydrator($hydrator);
        $instance->setInputFilter($inputFilter);

        return $instance;
    }


}
