<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace ArticleAdmin\Form;

use Zend\Form\Form;

/**
 * ArticleDataForm
 *
 * Provides the ArticleDataForm form for the ArticleAdmin Module
 *
 * @package ArticleAdmin\Form
 */
class ArticleDataForm extends Form
{

    /**
     * author options
     *
     * @var array
     */
    private $authorOptions = null;

    /**
     * category options
     *
     * @var array
     */
    private $categoryOptions = null;

    /**
     * Set author options
     *
     * @param array $authorOptions
     */
    public function setAuthorOptions(array $authorOptions)
    {
        $this->authorOptions = $authorOptions;
    }

    /**
     * Set category options
     *
     * @param array $categoryOptions
     */
    public function setCategoryOptions(array $categoryOptions)
    {
        $this->categoryOptions = $categoryOptions;
    }

    /**
     * Initialize the ArticleDataForm for module ArticleAdmin
     *
     * Please add any options and attributes you need for each form element
     */
    public function init()
    {
        $this->setName('ArticleAdminForm');

        $this->add(
            [
                'name' => 'created',
                'type' => 'text',
                'options' => [
                    'label' => 'article_admin_label_created',
                ],
                'attributes' => [
                    'class' => 'form-control',
                ],
            ]
        );

        $this->add(
            [
                'name' => 'changed',
                'type' => 'text',
                'options' => [
                    'label' => 'article_admin_label_changed',
                ],
                'attributes' => [
                    'class' => 'form-control',
                ],
            ]
        );

        $this->add(
            [
                'name' => 'author',
                'type' => 'select',
                'options' => [
                    'label' => 'article_admin_label_author',
                    'value_options' => $this->authorOptions,
                ],
                'attributes' => [
                    'class' => 'form-control',
                ],
            ]
        );

        $this->add(
            [
                'name' => 'status',
                'type' => 'select',
                'options' => [
                    'label' => 'article_admin_label_status',
                    'value_options' => [
                        'new' => 'article_option_status_new',
                        'reviewed' => 'article_option_status_reviewed',
                        'released' => 'article_option_status_released',
                        'blocked' => 'article_option_status_blocked',
                        'outdated' => 'article_option_status_outdated',
                    ],
                ],
                'attributes' => [
                    'class' => 'form-control',
                    'value' => 'new',
                ],
            ]
        );

        $this->add(
            [
                'name' => 'category',
                'type' => 'select',
                'options' => [
                    'label' => 'article_admin_label_category',
                    'value_options' => $this->categoryOptions,
                ],
                'attributes' => [
                    'class' => 'form-control',
                ],
            ]
        );

        $this->add(
            [
                'name' => 'title',
                'type' => 'text',
                'options' => [
                    'label' => 'article_admin_label_title',
                ],
                'attributes' => [
                    'class' => 'form-control',
                ],
            ]
        );

        $this->add(
            [
                'name' => 'teaser',
                'type' => 'textarea',
                'options' => [
                    'label' => 'article_admin_label_teaser',
                ],
                'attributes' => [
                    'class' => 'form-control',
                    'rows' => '3',
                ],
            ]
        );

        $this->add(
            [
                'name' => 'text',
                'type' => 'textarea',
                'options' => [
                    'label' => 'article_admin_label_text',
                ],
                'attributes' => [
                    'class' => 'form-control',
                    'rows' => '10',
                ],
            ]
        );

        $this->add(
            [
                'name' => 'save_article',
                'type' => 'Submit',
                'options' => [
                ],
                'attributes' => [
                    'value' => 'article_admin_action_save',
                    'id' => 'save_article',
                    'class' => 'btn btn-success',
                ],
            ]
        );
    }


}
