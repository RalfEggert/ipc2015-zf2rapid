<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\Hydrator\Strategy;

use Zend\Stdlib\Hydrator\Strategy\StrategyInterface;
use BlogDomain\Model\Entity\CategoryEntity;

/**
 * CategoryStrategy
 *
 * Provides the Category hydrator strategy for the BlogDomain Module
 *
 * @package BlogDomain\Model\Hydrator\Strategy
 */
class CategoryStrategy implements StrategyInterface
{

    /**
     * Extract identifier from entity
     *
     * @param CategoryEntity $value
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
     * @return CategoryEntity
     */
    public function hydrate($value, array $data = array())
    {
        if (isset($data['category.id'])) {
            $id = $data['category.id'];
            $name = $data['category.name'];
        } else {
            $id = $value;
            $name = $value;
        }

        $category = new CategoryEntity();
        $category->exchangeArray(
            [
                'id' => $id,
                'name' => $name,
            ]
        );

        return $category;
    }


}
