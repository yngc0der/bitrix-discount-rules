<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\Basket;

use Yngc0der\DiscountRules\Presets\Conditions\Group;

/**
 * Class SubGroupShortLogic
 * @package Yngc0der\DiscountRules\Presets\Conditions\Basket
 */
abstract class SubGroupShortLogic extends Group
{
    /**
     * @return $this
     */
    public function allConditionsCompleted()
    {
        return $this->setData('All', 'AND');
    }

    /**
     * @return $this
     */
    public function anyConditionCompleted()
    {
        return $this->setData('All', 'OR');
    }
}
