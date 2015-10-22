<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\Hydrator\Strategy;

use Zend\Stdlib\Hydrator\Strategy\StrategyInterface;
use BlogDomain\Model\Entity\AuthorEntity;

/**
 * AuthorStrategy
 *
 * Provides the Author hydrator strategy for the BlogDomain Module
 *
 * @package BlogDomain\Model\Hydrator\Strategy
 */
class AuthorStrategy implements StrategyInterface
{

    /**
     * Extract identifier from entity
     *
     * @param AuthorEntity $value
     * @return string
     */
    public function extract($value)
    {
        if (!is_object($value)) {
            return $value;
        }

        return $value->getIdentifier();
    }

    /**
     * Hydrate an entity by populating data
     *
     * @param $value
     * @param array $data
     * @return AuthorEntity
     */
    public function hydrate($value, array $data = array())
    {
        if (isset($data['author.id'])) {
            $id = $data['author.id'];
            $first_name = $data['author.first_name'];
            $last_name = $data['author.last_name'];
        } else {
            $id = $value;
            $first_name = $value;
            $last_name = $value;
        }

        $author = new AuthorEntity();
        $author->exchangeArray(
            [
                'id' => $id,
                'first_name' => $first_name,
                'last_name' => $last_name,
            ]
        );

        return $author;
    }


}
