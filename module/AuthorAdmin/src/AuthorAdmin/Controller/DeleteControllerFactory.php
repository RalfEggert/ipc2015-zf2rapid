<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace AuthorAdmin\Controller;

use AuthorAdmin\Form\AuthorDeleteForm;
use BlogDomain\Model\Repository\AuthorRepository;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * DeleteControllerFactory
 *
 * Creates an instance of DeleteController
 *
 * @package AuthorAdmin\Controller
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

        /** @var AuthorRepository $authorRepository */
        $authorRepository = $serviceLocator->get('BlogDomain\Model\Repository\Author');

        /** @var AuthorDeleteForm $authorDeleteForm */
        $authorDeleteForm = $formElementManager->get('AuthorAdmin\Delete\Form');

        $instance = new DeleteController();
        $instance->setAuthorRepository($authorRepository);
        $instance->setAuthorDeleteForm($authorDeleteForm);

        return $instance;
    }


}
