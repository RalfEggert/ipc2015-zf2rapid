<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace BlogDomain\Model\InputFilter;

use Zend\InputFilter\InputFilter;

/**
 * ArticleInputFilter
 *
 * Provides the ArticleInputFilter input filter for the BlogDomain Module
 *
 * @package BlogDomain\Model\InputFilter
 */
class ArticleInputFilter extends InputFilter
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
     * Initialize the ArticleInputFilter for module BlogDomain
     *
     * Please add any filter and validator you need for each input element
     */
    public function init()
    {
        $this->add(
            [
                'name' => 'id',
                'required' => false,
                'filters' => [
                ],
                'validators' => [
                    [
                        'name' => 'NotEmpty',
                        'options' => [
                             'message' => 'article_message_article_id_notempty',
                        ],
                    ],
                ],
            ]
        );

        $this->add(
            [
                'name' => 'created',
                'required' => false,
                'filters' => [
                    [
                        'name' => 'StringTrim',
                    ],
                ],
                'validators' => [
                    [
                        'name' => 'NotEmpty',
                        'options' => [
                             'message' => 'article_message_article_created_notempty',
                        ],
                    ],
                ],
            ]
        );

        $this->add(
            [
                'name' => 'changed',
                'required' => false,
                'filters' => [
                    [
                        'name' => 'StringTrim',
                    ],
                ],
                'validators' => [
                    [
                        'name' => 'NotEmpty',
                        'options' => [
                             'message' => 'article_message_article_changed_notempty',
                        ],
                    ],
                ],
            ]
        );

        $this->add(
            [
                'name' => 'author',
                'required' => false,
                'filters' => [
                ],
                'validators' => [
                    [
                        'name' => 'InArray',
                        'options' => [
                             'haystack' => $this->authorOptions,
                             'message' => 'article_message_article_author_inarray',
                        ],
                    ],
                    [
                        'name' => 'NotEmpty',
                        'options' => [
                             'message' => 'article_message_article_author_notempty',
                        ],
                    ],
                ],
            ]
        );

        $this->add(
            [
                'name' => 'status',
                'required' => true,
                'filters' => [
                    [
                        'name' => 'StringTrim',
                    ],
                ],
                'validators' => [
                    [
                        'name' => 'InArray',
                        'options' => [
                             'haystack' => ['new', 'reviewed', 'released', 'blocked', 'outdated'],
                             'message' => 'article_message_article_status_inarray',
                        ],
                    ],
                    [
                        'name' => 'NotEmpty',
                        'options' => [
                             'message' => 'article_message_article_status_notempty',
                        ],
                    ],
                ],
            ]
        );

        $this->add(
            [
                'name' => 'category',
                'required' => false,
                'filters' => [
                ],
                'validators' => [
                    [
                        'name' => 'InArray',
                        'options' => [
                             'haystack' => $this->categoryOptions,
                             'message' => 'article_message_article_category_inarray',
                        ],
                    ],
                    [
                        'name' => 'NotEmpty',
                        'options' => [
                             'message' => 'article_message_article_category_notempty',
                        ],
                    ],
                ],
            ]
        );

        $this->add(
            [
                'name' => 'title',
                'required' => true,
                'filters' => [
                    [
                        'name' => 'StringTrim',
                    ],
                ],
                'validators' => [
                    [
                        'name' => 'StringLength',
                        'options' => [
                             'max' => 64,
                             'message' => 'article_message_article_title_stringlength',
                        ],
                    ],
                    [
                        'name' => 'NotEmpty',
                        'options' => [
                             'message' => 'article_message_article_title_notempty',
                        ],
                    ],
                ],
            ]
        );

        $this->add(
            [
                'name' => 'teaser',
                'required' => true,
                'filters' => [
                ],
                'validators' => [
                    [
                        'name' => 'NotEmpty',
                        'options' => [
                             'message' => 'article_message_article_teaser_notempty',
                        ],
                    ],
                ],
            ]
        );

        $this->add(
            [
                'name' => 'text',
                'required' => true,
                'filters' => [
                    [
                        'name' => 'StringTrim',
                    ],
                ],
                'validators' => [
                    [
                        'name' => 'NotEmpty',
                        'options' => [
                             'message' => 'article_message_article_text_notempty',
                        ],
                    ],
                ],
            ]
        );
    }


}
