<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.02.20
 */

namespace Yngc0der\DiscountRules\Presets\Conditions;

use Yngc0der\DiscountRules\Presets\Base as BasePreset;
use DateTime;

/**
 * Class DateTimePeriod
 * @package Yngc0der\DiscountRules\Presets\Conditions
 */
class DateTimePeriod extends BasePreset
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'Period';
    }

    /**
     * @param DateTime $value
     * @return $this
     */
    public function from($value)
    {
        return $this->setData('ValueStart', $value->getTimestamp());
    }

    /**
     * @param DateTime $value
     * @return $this
     */
    public function to($value)
    {
        return $this->setData('ValueEnd', $value->getTimestamp());
    }
}
