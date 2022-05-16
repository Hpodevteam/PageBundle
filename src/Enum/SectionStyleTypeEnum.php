<?php

namespace Hippocampe\Bundle\PageBundle\Enum;


class SectionStyleTypeEnum
{
    use Enum;

    const TYPE_NONE     = 'none';
    const TYPE_SMALL    = 'my-2';
    const TYPE_NORMAL   = 'my-3';
    const TYPE_TOP      = 'mt-4';
    const TYPE_BOTTOM   = 'mb-4';

    protected static array $typeName = [
        self::TYPE_NONE => 'Aucune marge',
        self::TYPE_SMALL => 'Petite marge',
        self::TYPE_NORMAL => 'Normale',
        self::TYPE_TOP => 'Marge haute',
        self::TYPE_BOTTOM => 'Marge basse',
    ];
}
