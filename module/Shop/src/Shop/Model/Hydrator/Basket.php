<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace Shop\Model\Hydrator;

use Zend\Stdlib\Hydrator\ClassMethods;

/**
 * Basket
 *
 * Provides the Basket hydrator for the Shop Module
 *
 * @package Shop\Model\Hydrator
 */
class Basket extends ClassMethods
{

    /**
     * Extract values from an object
     *
     * @param object $object
     * @return array
     */
    public function extract($object)
    {
        // add extended hydrator logic here
        return parent::extract($object);
    }

    /**
     * Hydrate an object by populating data
     *
     * @param array $data
     * @param object $object
     * @return object
     */
    public function hydrate(array $data, $object)
    {
        // add extended hydrator logic here
        return parent::hydrate($data, $object);
    }


}