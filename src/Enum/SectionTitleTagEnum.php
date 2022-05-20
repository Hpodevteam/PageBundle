<?php

namespace Hippocampe\Bundle\PageBundle\Enum;

class SectionTitleTagEnum
{
    use Enum;

    const TYPE_XS = 'h5';
    const TYPE_S = 'h4';
    const TYPE_M = 'h3';
    const TYPE_L = 'h2';
    const TYPE_XL = 'h1';

    protected static array $typeName = [
        self::TYPE_XS => 'H5',
        self::TYPE_S => 'H4',
        self::TYPE_M => 'H3',
        self::TYPE_L => 'H2',
        self::TYPE_XL => 'H1',
    ];
}
