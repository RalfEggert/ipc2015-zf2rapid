<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\InputFilter;

use BlogDomain\Model\TableGateway\CategoryTableGateway;
use BlogDomain\Model\TableGateway\AuthorTableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * ArticleInputFilterFactory
 *
 * Creates an instance of ArticleInputFilter
 *
 * @package BlogDomain\Model\InputFilter
 */
class ArticleInputFilterFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $inputFilterManager
     * @return ArticleInputFilter
     */
    public function createService(ServiceLocatorInterface $inputFilterManager)
    {
        $serviceLocator = $inputFilterManager->getServiceLocator();

        /** @var CategoryTableGateway $categoryTableGateway */
        $categoryTableGateway = $serviceLocator->get('BlogDomain\Model\TableGateway\Category');

        /** @var AuthorTableGateway $authorTableGateway */
        $authorTableGateway = $serviceLocator->get('BlogDomain\Model\TableGateway\Author');

        $instance = new ArticleInputFilter();
        $instance->setCategoryOptions(array_keys($categoryTableGateway->getOptions()));
        $instance->setAuthorOptions(array_keys($authorTableGateway->getOptions()));

        return $instance;
    }


}
