<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.02.20
 */

namespace Yngc0der\DiscountRules\Presets\Conditions;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\ArrayValue;

/**
 * Class UserGroup
 * @package Yngc0der\DiscountRules\Presets\Conditions
 */
class UserGroup extends ArrayValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'BX:CondMainUserGroupId';
    }
}
