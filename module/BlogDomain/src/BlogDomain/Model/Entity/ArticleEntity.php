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
 * ArticleEntity
 *
 * Provides the ArticleEntity entity for the BlogDomain Module
 *
 * @package BlogDomain\Model\Entity
 */
class ArticleEntity extends AbstractEntity
{

    /**
     * id property
     *
     * @var integer
     */
    protected $id = null;

    /**
     * created property
     *
     * @var string
     */
    protected $created = null;

    /**
     * changed property
     *
     * @var string
     */
    protected $changed = null;

    /**
     * author property
     *
     * @var AuthorEntity
     */
    protected $author = null;

    /**
     * status property
     *
     * @var string
     */
    protected $status = null;

    /**
     * category property
     *
     * @var CategoryEntity
     */
    protected $category = null;

    /**
     * title property
     *
     * @var string
     */
    protected $title = null;

    /**
     * teaser property
     *
     * @var string
     */
    protected $teaser = null;

    /**
     * text property
     *
     * @var string
     */
    protected $text = null;

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
     * Set created
     *
     * @param string $created
     */
    protected function setCreated($created)
    {
        $this->created = (string) $created;
    }

    /**
     * Get created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set changed
     *
     * @param string $changed
     */
    protected function setChanged($changed)
    {
        $this->changed = (string) $changed;
    }

    /**
     * Get changed
     *
     * @return string
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * Set author
     *
     * @param AuthorEntity $author
     */
    protected function setAuthor(AuthorEntity $author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return AuthorEntity
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set status
     *
     * @param string $status
     */
    protected function setStatus($status)
    {
        $this->status = (string) $status;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set category
     *
     * @param CategoryEntity $category
     */
    protected function setCategory(CategoryEntity $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return CategoryEntity
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    protected function setTitle($title)
    {
        $this->title = (string) $title;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set teaser
     *
     * @param string $teaser
     */
    protected function setTeaser($teaser)
    {
        $this->teaser = (string) $teaser;
    }

    /**
     * Get teaser
     *
     * @return string
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Set text
     *
     * @param string $text
     */
    protected function setText($text)
    {
        $this->text = (string) $text;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Output entity
     *
     * @return string
     */
    public function __toString()
    {
        $columns = [
            $this->getCreated(),
            $this->getChanged(),
            $this->getAuthor(),
            $this->getStatus(),
            $this->getCategory(),
            $this->getTitle(),
            $this->getTeaser(),
            $this->getText(),
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

    /**
     * Create an article
     */
    public function createArticle()
    {
        $this->setCreated(date('Y-m-d H:i:s'));
        $this->setChanged(date('Y-m-d H:i:s'));
    }

    /**
     * Update an article
     */
    public function updateArticle()
    {
        $this->setChanged(date('Y-m-d H:i:s'));
    }

}
