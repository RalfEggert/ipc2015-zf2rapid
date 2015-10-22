<?php
/**
 * ZF2 Application built by ZF2rapid
 *
 * @copyright (c) 2015 John Doe
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */


namespace Shop\Model\Validator;

use Zend\Validator\AbstractValidator;

/**
 * Basket
 *
 * Provides the Basket validator for the Shop Module
 *
 * @package Shop\Model\Validator
 */
class Basket extends AbstractValidator
{

    /**
     * @const
     */
    const INVALID = 'invalidBasket';

    /**
     * Validation failure message template definitions
     *
     * @var array
     */
    public $messageTemplates = array(
        'invalidBasket' => 'Value "%value%" is not valid',
    );

    /**
     * Called when validator is executed
     *
     * @param mixed $value
     * @return mixed
     */
    public function isValid($value)
    {
        $this->setValue((string) $value);

        // add validation code here
        $isValid = true;

        if (!$isValid) {
            $this->error(self::INVALID);
            return false;
        }

        return true;
    }


}
