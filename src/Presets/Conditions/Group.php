<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 22.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions;

use Yngc0der\DiscountRules\Presets\BaseGroup;

/**
 * Class Group
 * @package Yngc0der\DiscountRules\Presets\Conditions
 */
class Group extends BaseGroup
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondGroup';
    }

    /**
     * @return $this
     */
    public function allConditions()
    {
        return $this->setData('All', 'AND');
    }

    /**
     * @return $this
     */
    public function anyCondition()
    {
        return $this->setData('All', 'OR');
    }

    /**
     * @return $this
     */
    public function completed()
    {
        return $this->setData('True', 'True');
    }

    /**
     * @return $this
     */
    public function failed()
    {
        return $this->setData('True', 'False');
    }
}
