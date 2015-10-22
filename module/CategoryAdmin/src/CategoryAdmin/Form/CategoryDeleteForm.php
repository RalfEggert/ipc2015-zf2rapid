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
 * CategoryDeleteForm
 *
 * Provides the CategoryDeleteForm form for the CategoryAdmin Module
 *
 * @package CategoryAdmin\Form
 */
class CategoryDeleteForm extends Form
{

    /**
     * Initialize the CategoryDeleteForm for module CategoryAdmin
     *
     * Please add any options and attributes you need for each form element
     */
    public function init()
    {
        $this->setName('CategoryAdminForm');

        $this->add(
            [
                'name' => 'delete_category',
                'type' => 'Submit',
                'options' => [
                ],
                'attributes' => [
                    'value' => 'category_action_delete',
                    'id' => 'save_category',
                    'class' => 'btn btn-success',
                ],
            ]
        );
    }


}
