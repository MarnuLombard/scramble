<?php

namespace Dedoc\Scramble\Configuration\Enums;

enum NullableStrategy: string
{
    case UNION_TYPES = 'union_types';
    case NULLABLE = 'nullable';
}
