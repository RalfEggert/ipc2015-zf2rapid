<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace AuthorAdmin\Form;

use Zend\Form\Form;

/**
 * AuthorDataForm
 *
 * Provides the AuthorDataForm form for the AuthorAdmin Module
 *
 * @package AuthorAdmin\Form
 */
class AuthorDataForm extends Form
{

    /**
     * Initialize the AuthorDataForm for module AuthorAdmin
     *
     * Please add any options and attributes you need for each form element
     */
    public function init()
    {
        $this->setName('AuthorAdminForm');

        $this->add(
            [
                'name' => 'first_name',
                'type' => 'text',
                'options' => [
                    'label' => 'author_admin_label_first_name',
                ],
                'attributes' => [
                    'class' => 'form-control',
                ],
            ]
        );

        $this->add(
            [
                'name' => 'last_name',
                'type' => 'text',
                'options' => [
                    'label' => 'author_admin_label_last_name',
                ],
                'attributes' => [
                    'class' => 'form-control',
                ],
            ]
        );

        $this->add(
            [
                'name' => 'save_author',
                'type' => 'Submit',
                'options' => [
                ],
                'attributes' => [
                    'value' => 'author_admin_action_save',
                    'id' => 'save_author',
                    'class' => 'btn btn-success',
                ],
            ]
        );
    }


}
