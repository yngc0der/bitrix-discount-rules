<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.02.20
 */

namespace Yngc0der\DiscountRules\Presets\Conditions;

use Yngc0der\DiscountRules\Presets\Base as BasePreset;

/**
 * Class LastTime
 * @package Yngc0der\DiscountRules\Presets\Conditions
 */
class LastTime extends BasePreset
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'PeriodRelative';
    }

    /**
     * @param int $value
     * @return LastTime
     */
    public function years($value)
    {
        return $this
            ->setData('TypeRelativePeriod', 'Y')
            ->setData('Value', (int)$value);
    }

    /**
     * @param int $value
     * @return LastTime
     */
    public function months($value)
    {
        return $this
            ->setData('TypeRelativePeriod', 'M')
            ->setData('Value', (int)$value);
    }

    /**
     * @param int $value
     * @return LastTime
     */
    public function days($value)
    {
        return $this
            ->setData('TypeRelativePeriod', 'D')
            ->setData('Value', (int)$value);
    }
}
