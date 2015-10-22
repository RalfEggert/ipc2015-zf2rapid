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
 * ArticleDeleteForm
 *
 * Provides the ArticleDeleteForm form for the ArticleAdmin Module
 *
 * @package ArticleAdmin\Form
 */
class ArticleDeleteForm extends Form
{

    /**
     * Initialize the ArticleDeleteForm for module ArticleAdmin
     *
     * Please add any options and attributes you need for each form element
     */
    public function init()
    {
        $this->setName('ArticleAdminForm');

        $this->add(
            [
                'name' => 'delete_article',
                'type' => 'Submit',
                'options' => [
                ],
                'attributes' => [
                    'value' => 'article_action_delete',
                    'id' => 'save_article',
                    'class' => 'btn btn-success',
                ],
            ]
        );
    }


}
