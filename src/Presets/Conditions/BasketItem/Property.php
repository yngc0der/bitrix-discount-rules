<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\BasketItem;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\StringValue;
use Yngc0der\DiscountRules\Exceptions\DiscountRulesException;

/**
 * Class Property
 * @package Yngc0der\DiscountRules\Presets\Conditions\BasketItem
 */
class Property extends StringValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'BX:CondBsktProp';
    }

    /**
     * @param string $name
     * @return StringValue
     * @throws DiscountRulesException
     */
    public function whereName($name)
    {
        return $this
            ->setData('Entity', 'NAME')
            ->setData('Name', (string)$name);
    }

    /**
     * @param string $code
     * @return StringValue
     * @throws DiscountRulesException
     */
    public function whereCode($code)
    {
        return $this
            ->setData('Entity', 'CODE')
            ->setData('Name', (string)$code);
    }

    /**
     * @param string $logic
     * @return string
     * @throws DiscountRulesException
     */
    protected function getLogicId($logic)
    {
        switch ($logic) {
            case 'Equal':
                return '0';
            case 'Not':
                return '1';
            case 'Contain':
                return '6';
            case 'NotCont':
                return '7';
        }

        throw new DiscountRulesException('Incorrect "logic" argument value');
    }

    /**
     * @inheritDoc
     * @throws DiscountRulesException
     */
    public function setData($key, $value)
    {
        if ($key == 'Logic') {
            $value = $this->getLogicId($value);
        }

        return parent::setData($key, $value);
    }
}
