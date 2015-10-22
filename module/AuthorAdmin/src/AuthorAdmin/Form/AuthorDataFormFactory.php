<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace AuthorAdmin\Form;

use BlogDomain\Model\Hydrator\AuthorHydrator;
use BlogDomain\Model\InputFilter\AuthorInputFilter;
use Zend\InputFilter\InputFilterPluginManager;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\HydratorPluginManager;

/**
 * AuthorDataFormFactory
 *
 * Creates an instance of AuthorDataForm
 *
 * @package AuthorAdmin\Form
 */
class AuthorDataFormFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $formElementManager
     * @return AuthorDataForm
     */
    public function createService(ServiceLocatorInterface $formElementManager)
    {
        $serviceLocator = $formElementManager->getServiceLocator();

        /** @var HydratorPluginManager $hydratorManager */
        $hydratorManager = $serviceLocator->get('HydratorManager');

        /** @var InputFilterPluginManager $inputFilterManager */
        $inputFilterManager = $serviceLocator->get('InputFilterManager');

        /** @var AuthorHydrator $hydrator */
        $hydrator  = $hydratorManager->get('BlogDomain\Author');

        /** @var AuthorInputFilter $inputFilter */
        $inputFilter  = $inputFilterManager->get('BlogDomain\Author');

        $instance = new AuthorDataForm();
        $instance->setHydrator($hydrator);
        $instance->setInputFilter($inputFilter);

        return $instance;
    }


}
