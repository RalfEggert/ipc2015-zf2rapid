<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace ArticleAdmin\Controller;

use ArticleAdmin\Form\ArticleDeleteForm;
use BlogDomain\Model\Repository\ArticleRepository;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * DeleteControllerFactory
 *
 * Creates an instance of DeleteController
 *
 * @package ArticleAdmin\Controller
 */
class DeleteControllerFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $controllerManager
     * @return DeleteController
     */
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        $serviceLocator = $controllerManager->getServiceLocator();

        /** @var ServiceLocatorInterface $formElementManager */
        $formElementManager = $serviceLocator->get('FormElementManager');

        /** @var ArticleRepository $articleRepository */
        $articleRepository = $serviceLocator->get('BlogDomain\Model\Repository\Article');

        /** @var ArticleDeleteForm $articleDeleteForm */
        $articleDeleteForm = $formElementManager->get('ArticleAdmin\Delete\Form');

        $instance = new DeleteController();
        $instance->setArticleRepository($articleRepository);
        $instance->setArticleDeleteForm($articleDeleteForm);

        return $instance;
    }


}
