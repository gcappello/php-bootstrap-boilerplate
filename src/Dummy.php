<?php
declare(strict_types = 1);

namespace GCappello\PhpBootstrap;

class Dummy
{
    public const TEXT = 'Hi world';

    public static function greet(): string
    {
        return self::TEXT;
    }
}
