<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\TableGateway;

use ZF2rapidDomain\TableGateway\AbstractTableGateway;
use BlogDomain\Model\Entity\AuthorEntity;

/**
 * AuthorTableGateway
 *
 * Provides the AuthorTableGateway table gateway for the BlogDomain Module
 *
 * @package BlogDomain\Model\TableGateway
 */
class AuthorTableGateway extends AbstractTableGateway
{

    /**
     * Get option list
     *
     * @return array
     */
    public function getOptions()
    {
        $options = [];

        /** @var AuthorEntity $entity */
        foreach ($this->fetchAllEntities() as $entity) {
            $columns = [
                $entity->getFirstName(),
                $entity->getLastName(),
            ];

            $options[$entity->getIdentifier()] = implode(' ', $columns);
        }

        return $options;
    }


}
