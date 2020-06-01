<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 02.01.20
 */

namespace Yngc0der\DiscountRules\Presets\Conditions\IblockElement\Traits;

/**
 * Trait PropertyClassIdImplementationTrait
 * @package Yngc0der\DiscountRules\Presets\Conditions\IblockElement\Traits
 */
trait PropertyClassIdImplementationTrait
{
    /** @var int */
    protected $iblock_id;

    /** @var int */
    protected $property_id;

    /**
     * Property constructor.
     * @param int $iblock_id
     * @param int $property_id
     */
    public function __construct($iblock_id, $property_id)
    {
        $this->iblock_id = (int)$iblock_id;
        $this->property_id = (int)$property_id;
    }

    /**
     * @inheritdoc
     */
    protected function getClassId()
    {
        return "CondIBProp:{$this->iblock_id}:{$this->property_id}";
    }
}
