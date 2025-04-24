<?php

namespace Dedoc\Scramble\Support\Generator\Types;

use Dedoc\Scramble\Configuration\Enums\NullableStrategy;

class MixedType extends Type
{
    public function __construct()
    {
        parent::__construct('mixed');
    }

    public function toArray(NullableStrategy $nullableStrategy)
    {
        // Yes. It is not an array. I live with it.
        return (object) [];
    }
}
