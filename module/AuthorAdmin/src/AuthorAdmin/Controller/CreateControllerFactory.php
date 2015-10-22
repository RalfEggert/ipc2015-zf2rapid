<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace AuthorAdmin\Controller;

use AuthorAdmin\Form\AuthorDataForm;
use BlogDomain\Model\Repository\AuthorRepository;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * CreateControllerFactory
 *
 * Creates an instance of CreateController
 *
 * @package AuthorAdmin\Controller
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

        /** @var AuthorRepository $authorRepository */
        $authorRepository = $serviceLocator->get('BlogDomain\Model\Repository\Author');

        /** @var AuthorDataForm $authorDataForm */
        $authorDataForm = $formElementManager->get('AuthorAdmin\Data\Form');

        $instance = new CreateController();
        $instance->setAuthorRepository($authorRepository);
        $instance->setAuthorDataForm($authorDataForm);

        return $instance;
    }


}
