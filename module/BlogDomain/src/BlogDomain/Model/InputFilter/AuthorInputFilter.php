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
 * AuthorInputFilter
 *
 * Provides the AuthorInputFilter input filter for the BlogDomain Module
 *
 * @package BlogDomain\Model\InputFilter
 */
class AuthorInputFilter extends InputFilter
{

    /**
     * Initialize the AuthorInputFilter for module BlogDomain
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
                             'message' => 'author_message_author_id_notempty',
                        ],
                    ],
                ],
            ]
        );

        $this->add(
            [
                'name' => 'first_name',
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
                             'message' => 'author_message_author_first_name_stringlength',
                        ],
                    ],
                    [
                        'name' => 'NotEmpty',
                        'options' => [
                             'message' => 'author_message_author_first_name_notempty',
                        ],
                    ],
                ],
            ]
        );

        $this->add(
            [
                'name' => 'last_name',
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
                             'message' => 'author_message_author_last_name_stringlength',
                        ],
                    ],
                    [
                        'name' => 'NotEmpty',
                        'options' => [
                             'message' => 'author_message_author_last_name_notempty',
                        ],
                    ],
                ],
            ]
        );
    }


}
