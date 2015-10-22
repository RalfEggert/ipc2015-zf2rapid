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
 * CategoryEntity
 *
 * Provides the CategoryEntity entity for the BlogDomain Module
 *
 * @package BlogDomain\Model\Entity
 */
class CategoryEntity extends AbstractEntity
{

    /**
     * id property
     *
     * @var integer
     */
    protected $id = null;

    /**
     * name property
     *
     * @var string
     */
    protected $name = null;

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
     * Set name
     *
     * @param string $name
     */
    protected function setName($name)
    {
        $this->name = (string) $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output entity
     *
     * @return string
     */
    public function __toString()
    {
        $columns = [
            $this->getName(),
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
