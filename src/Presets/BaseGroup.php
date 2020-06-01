<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 22.10.19
 */

namespace Yngc0der\DiscountRules\Presets;

/**
 * Class BaseGroup
 * @package Yngc0der\DiscountRules\Presets
 */
abstract class BaseGroup extends Base
{
    /** @var Base[] $collection */
    protected $collection = [];

    /**
     * @inheritdoc
     */
    public function toArray()
    {
        $result = parent::toArray();

        $result['CHILDREN'] = array_map(
            function (Base $item) {
                return $item->toArray();
            },
            $this->collection
        );

        return $result;
    }

    /**
     * @param Base $item
     * @return BaseGroup
     */
    public function addChildren(Base $item)
    {
        $this->collection[] = $item;

        return $this;
    }
}
