<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace CategoryAdmin\Controller;

use CategoryAdmin\Form\CategoryDataForm;
use BlogDomain\Model\Repository\CategoryRepository;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * UpdateControllerFactory
 *
 * Creates an instance of UpdateController
 *
 * @package CategoryAdmin\Controller
 */
class UpdateControllerFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface|ServiceLocatorAwareInterface $controllerManager
     * @return UpdateController
     */
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        $serviceLocator = $controllerManager->getServiceLocator();

        /** @var ServiceLocatorInterface $formElementManager */
        $formElementManager = $serviceLocator->get('FormElementManager');

        /** @var CategoryRepository $categoryRepository */
        $categoryRepository = $serviceLocator->get('BlogDomain\Model\Repository\Category');

        /** @var CategoryDataForm $categoryDataForm */
        $categoryDataForm = $formElementManager->get('CategoryAdmin\Data\Form');

        $instance = new UpdateController();
        $instance->setCategoryRepository($categoryRepository);
        $instance->setCategoryDataForm($categoryDataForm);

        return $instance;
    }


}
