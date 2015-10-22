<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\Entity;

use ZF2rapidDomain\Entity\AbstractEntity;

/**
 * AuthorEntity
 *
 * Provides the AuthorEntity entity for the BlogDomain Module
 *
 * @package BlogDomain\Model\Entity
 */
class AuthorEntity extends AbstractEntity
{

    /**
     * id property
     *
     * @var integer
     */
    protected $id = null;

    /**
     * firstName property
     *
     * @var string
     */
    protected $firstName = null;

    /**
     * lastName property
     *
     * @var string
     */
    protected $lastName = null;

    /**
     * Get the primary identifier
     *
     * @return integer
     */
    public function getIdentifier()
    {
        return $this->getId();
    }

    /**
     * Set id
     *
     * @param integer $id
     */
    protected function setId($id)
    {
        $this->id = (integer) $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    protected function setFirstName($firstName)
    {
        $this->firstName = (string) $firstName;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     */
    protected function setLastName($lastName)
    {
        $this->lastName = (string) $lastName;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Output entity
     *
     * @return string
     */
    public function __toString()
    {
        $columns = [
            $this->getFirstName(),
            $this->getLastName(),
        ];

        return implode(' ', $columns);
    }

    /**
     * Output entity
     *
     * @return string
     */
    public function toString()
    {
        return $this->__toString();
    }


}
