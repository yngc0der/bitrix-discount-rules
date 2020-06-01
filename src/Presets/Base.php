<?php
/**
 * Created by RG. <rg.archuser@gmail.com>
 * Date: 22.10.19
 */

namespace Yngc0der\DiscountRules\Presets;

use Yngc0der\DiscountRules\Contracts\DiscountRulePresetContract;

/**
 * Class Base
 * @package Yngc0der\DiscountRules\Presets
 */
abstract class Base implements DiscountRulePresetContract
{
    /** @var array */
    protected $data;

    /**
     * @return string
     */
    abstract protected function getClassId();

    /**
     * @inheritdoc
     */
    public function toArray()
    {
        $result = [
            'CLASS_ID' => $this->getClassId(),
            'DATA' => $this->data,
        ];

        return $result;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function setData($key, $value)
    {
        $this->data[$key] = $value;

        return $this;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function getData($key)
    {
        if (!key_exists($key, $this->data)) {
            return null;
        }

        return $this->data[$key];
    }
}
