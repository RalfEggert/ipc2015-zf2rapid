<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\TableGateway;

use ZF2rapidDomain\TableGateway\AbstractTableGateway;
use BlogDomain\Model\Entity\CategoryEntity;

/**
 * CategoryTableGateway
 *
 * Provides the CategoryTableGateway table gateway for the BlogDomain Module
 *
 * @package BlogDomain\Model\TableGateway
 */
class CategoryTableGateway extends AbstractTableGateway
{

    /**
     * Get option list
     *
     * @return array
     */
    public function getOptions()
    {
        $options = [];

        /** @var CategoryEntity $entity */
        foreach ($this->fetchAllEntities() as $entity) {
            $columns = [
                $entity->getName(),
            ];

            $options[$entity->getIdentifier()] = implode(' ', $columns);
        }

        return $options;
    }


}
