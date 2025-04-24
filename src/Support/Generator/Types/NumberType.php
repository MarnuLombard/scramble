<?php

namespace Dedoc\Scramble\Support\Generator\Types;

use Dedoc\Scramble\Configuration\Enums\NullableStrategy;

class NumberType extends Type
{
    public $min = null;

    public $max = null;

    public function __construct($type = 'number')
    {
        parent::__construct($type);
    }

    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }

    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    public function toArray(NullableStrategy $nullableStrategy)
    {
        return array_merge(parent::toArray($nullableStrategy), array_filter([
            'minimum' => $this->min,
            'maximum' => $this->max,
        ], fn ($v) => $v !== null));
    }
}
