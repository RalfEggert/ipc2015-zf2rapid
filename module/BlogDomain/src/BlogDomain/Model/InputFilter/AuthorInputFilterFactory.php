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
 * AuthorInputFilterFactory
 *
 * Creates an instance of AuthorInputFilter
 *
 * @package BlogDomain\Model\InputFilter
 */
class AuthorInputFilterFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $inputFilterManager
     * @return AuthorInputFilter
     */
    public function createService(ServiceLocatorInterface $inputFilterManager)
    {
        $serviceLocator = $inputFilterManager->getServiceLocator();

        $instance = new AuthorInputFilter();

        return $instance;
    }


}
