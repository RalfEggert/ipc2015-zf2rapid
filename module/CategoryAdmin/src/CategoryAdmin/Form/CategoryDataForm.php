<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace CategoryAdmin\Form;

use Zend\Form\Form;

/**
 * CategoryDataForm
 *
 * Provides the CategoryDataForm form for the CategoryAdmin Module
 *
 * @package CategoryAdmin\Form
 */
class CategoryDataForm extends Form
{

    /**
     * Initialize the CategoryDataForm for module CategoryAdmin
     *
     * Please add any options and attributes you need for each form element
     */
    public function init()
    {
        $this->setName('CategoryAdminForm');

        $this->add(
            [
                'name' => 'name',
                'type' => 'text',
                'options' => [
                    'label' => 'category_admin_label_name',
                ],
                'attributes' => [
                    'class' => 'form-control',
                ],
            ]
        );

        $this->add(
            [
                'name' => 'save_category',
                'type' => 'Submit',
                'options' => [
                ],
                'attributes' => [
                    'value' => 'category_admin_action_save',
                    'id' => 'save_category',
                    'class' => 'btn btn-success',
                ],
            ]
        );
    }


}
