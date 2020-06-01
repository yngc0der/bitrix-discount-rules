<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.02.20
 */

namespace Yngc0der\DiscountRules\Presets\Conditions;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\ArrayValue;

/**
 * Class User
 * @package Yngc0der\DiscountRules\Presets\Conditions
 */
class User extends ArrayValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondMainUserId';
    }
}
