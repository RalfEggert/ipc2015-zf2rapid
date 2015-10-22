<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\TableGateway;

use ZF2rapidDomain\Entity\EntityInterface;
use ZF2rapidDomain\TableGateway\AbstractTableGateway;
use BlogDomain\Model\Entity\ArticleEntity;
use Zend\Db\ResultSet\ResultSetInterface;
use Zend\Db\Sql\Select;

/**
 * ArticleTableGateway
 *
 * Provides the ArticleTableGateway table gateway for the BlogDomain Module
 *
 * @package BlogDomain\Model\TableGateway
 */
class ArticleTableGateway extends AbstractTableGateway
{

    /**
     * Get option list
     *
     * @return array
     */
    public function getOptions()
    {
        $options = [];

        /** @var ArticleEntity $entity */
        foreach ($this->fetchAllEntities() as $entity) {
            $columns = [
                $entity->getCreated(),
                $entity->getChanged(),
                $entity->getAuthor(),
                $entity->getStatus(),
                $entity->getCategory(),
                $entity->getTitle(),
                $entity->getTeaser(),
                $entity->getText(),
            ];

            $options[$entity->getIdentifier()] = implode(' ', $columns);
        }

        return $options;
    }

    /**
     * Add join tables
     *
     * @param Select $select
     * @return ResultSetInterface
     */
    public function selectWith(Select $select)
    {
        $select->join(
            'category',
            'article.category = category.id',
            [
                'category.id' => 'id',
                'category.name' => 'name',
            ]
        );

        $select->join(
            'author',
            'article.author = author.id',
            [
                'author.id' => 'id',
                'author.first_name' => 'first_name',
                'author.last_name' => 'last_name',
            ]
        );

        return parent::selectWith($select);
    }

    /**
     * @param ArticleEntity|EntityInterface $entity
     *
     * @return bool
     */
    public function insertEntity(EntityInterface $entity)
    {
        $entity->createArticle();

        return parent::insertEntity($entity);
    }

    /**
     * @param ArticleEntity|EntityInterface $entity
     *
     * @return bool
     */
    public function updateEntity(EntityInterface $entity)
    {
        $entity->updateArticle();

        return parent::updateEntity($entity);
    }


}
