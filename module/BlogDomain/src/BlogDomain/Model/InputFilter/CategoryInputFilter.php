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
 * CategoryInputFilter
 *
 * Provides the CategoryInputFilter input filter for the BlogDomain Module
 *
 * @package BlogDomain\Model\InputFilter
 */
class CategoryInputFilter extends InputFilter
{

    /**
     * Initialize the CategoryInputFilter for module BlogDomain
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
                             'message' => 'category_message_category_id_notempty',
                        ],
                    ],
                ],
            ]
        );

        $this->add(
            [
                'name' => 'name',
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
                             'max' => 32,
                             'message' => 'category_message_category_name_stringlength',
                        ],
                    ],
                    [
                        'name' => 'NotEmpty',
                        'options' => [
                             'message' => 'category_message_category_name_notempty',
                        ],
                    ],
                ],
            ]
        );
    }


}
