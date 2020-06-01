<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 23.10.19
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\IblockElement;

use Yngc0der\DiscountRules\Presets\Conditions\BaseValues\StringValue;

/**
 * Class PreviewText
 * @package Yngc0der\DiscountRules\Presets\Conditions\IblockElement
 */
class PreviewText extends StringValue
{
    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return 'CondIBPreviewText';
    }
}
