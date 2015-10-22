<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\Hydrator;

use Zend\Stdlib\Hydrator\ArraySerializable;

/**
 * AuthorHydrator
 *
 * Provides the AuthorHydrator hydrator for the BlogDomain Module
 *
 * @package BlogDomain\Model\Hydrator
 */
class AuthorHydrator extends ArraySerializable
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
