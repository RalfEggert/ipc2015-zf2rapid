<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace ArticleAdmin\Form;

use BlogDomain\Model\Hydrator\ArticleHydrator;
use BlogDomain\Model\InputFilter\ArticleInputFilter;
use BlogDomain\Model\TableGateway\CategoryTableGateway;
use BlogDomain\Model\TableGateway\AuthorTableGateway;
use Zend\InputFilter\InputFilterPluginManager;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\HydratorPluginManager;

/**
 * ArticleDataFormFactory
 *
 * Creates an instance of ArticleDataForm
 *
 * @package ArticleAdmin\Form
 */
class ArticleDataFormFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $formElementManager
     * @return ArticleDataForm
     */
    public function createService(ServiceLocatorInterface $formElementManager)
    {
        $serviceLocator = $formElementManager->getServiceLocator();

        /** @var HydratorPluginManager $hydratorManager */
        $hydratorManager = $serviceLocator->get('HydratorManager');

        /** @var InputFilterPluginManager $inputFilterManager */
        $inputFilterManager = $serviceLocator->get('InputFilterManager');

        /** @var CategoryTableGateway $categoryTableGateway */
        $categoryTableGateway = $serviceLocator->get('BlogDomain\Model\TableGateway\Category');

        /** @var AuthorTableGateway $authorTableGateway */
        $authorTableGateway = $serviceLocator->get('BlogDomain\Model\TableGateway\Author');

        /** @var ArticleHydrator $hydrator */
        $hydrator  = $hydratorManager->get('BlogDomain\Article');

        /** @var ArticleInputFilter $inputFilter */
        $inputFilter  = $inputFilterManager->get('BlogDomain\Article');

        $instance = new ArticleDataForm();
        $instance->setCategoryOptions($categoryTableGateway->getOptions());
        $instance->setAuthorOptions($authorTableGateway->getOptions());
        $instance->setHydrator($hydrator);
        $instance->setInputFilter($inputFilter);

        return $instance;
    }


}
