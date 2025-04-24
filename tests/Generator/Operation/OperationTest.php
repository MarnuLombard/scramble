<?php

use Dedoc\Scramble\Configuration\Enums\NullableStrategy;

it('deprecated key is properly set', function () {
    $operation = new \Dedoc\Scramble\Support\Generator\Operation('get');
    $operation->deprecated(true);

    $array = $operation->toArray(NullableStrategy::UNION_TYPES);

    expect($operation->deprecated)->toBeTrue()
        ->and($array)->toHaveKey('deprecated')
        ->and($array['deprecated'])->toBeTrue();
});

it('default deprecated key is false', function () {
    $operation = new \Dedoc\Scramble\Support\Generator\Operation('get');

    $array = $operation->toArray(NullableStrategy::UNION_TYPES);

    expect($operation->deprecated)->toBeFalse()
        ->and($array)->not()->toHaveKey('deprecated');
});

it('set extension property', function () {
    $operation = new \Dedoc\Scramble\Support\Generator\Operation('get');
    $operation->setExtensionProperty('custom-key', 'custom-value');

    $array = $operation->toArray(NullableStrategy::UNION_TYPES);

    expect($array)->toBe(['x-custom-key' => 'custom-value']);
});
