<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace ArticleAdmin\Controller;

use ArticleAdmin\Form\ArticleDataForm;
use BlogDomain\Model\Repository\ArticleRepository;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * CreateControllerFactory
 *
 * Creates an instance of CreateController
 *
 * @package ArticleAdmin\Controller
 */
class CreateControllerFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $controllerManager
     * @return CreateController
     */
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        $serviceLocator = $controllerManager->getServiceLocator();

        /** @var ServiceLocatorInterface $formElementManager */
        $formElementManager = $serviceLocator->get('FormElementManager');

        /** @var ArticleRepository $articleRepository */
        $articleRepository = $serviceLocator->get('BlogDomain\Model\Repository\Article');

        /** @var ArticleDataForm $articleDataForm */
        $articleDataForm = $formElementManager->get('ArticleAdmin\Data\Form');

        $instance = new CreateController();
        $instance->setArticleRepository($articleRepository);
        $instance->setArticleDataForm($articleDataForm);

        return $instance;
    }


}
