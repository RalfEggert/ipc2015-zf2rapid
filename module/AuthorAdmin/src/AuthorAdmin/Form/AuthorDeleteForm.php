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
 * AuthorDeleteForm
 *
 * Provides the AuthorDeleteForm form for the AuthorAdmin Module
 *
 * @package AuthorAdmin\Form
 */
class AuthorDeleteForm extends Form
{

    /**
     * Initialize the AuthorDeleteForm for module AuthorAdmin
     *
     * Please add any options and attributes you need for each form element
     */
    public function init()
    {
        $this->setName('AuthorAdminForm');

        $this->add(
            [
                'name' => 'delete_author',
                'type' => 'Submit',
                'options' => [
                ],
                'attributes' => [
                    'value' => 'author_action_delete',
                    'id' => 'save_author',
                    'class' => 'btn btn-success',
                ],
            ]
        );
    }


}
