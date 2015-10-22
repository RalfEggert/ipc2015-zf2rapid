<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace CategoryAdmin\Controller;

use CategoryAdmin\Form\CategoryDeleteForm;
use BlogDomain\Model\Repository\CategoryRepository;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * DeleteControllerFactory
 *
 * Creates an instance of DeleteController
 *
 * @package CategoryAdmin\Controller
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

        /** @var CategoryRepository $categoryRepository */
        $categoryRepository = $serviceLocator->get('BlogDomain\Model\Repository\Category');

        /** @var CategoryDeleteForm $categoryDeleteForm */
        $categoryDeleteForm = $formElementManager->get('CategoryAdmin\Delete\Form');

        $instance = new DeleteController();
        $instance->setCategoryRepository($categoryRepository);
        $instance->setCategoryDeleteForm($categoryDeleteForm);

        return $instance;
    }


}
