<?php

namespace Hippocampe\Bundle\PageBundle\Enum;


class SectionStyleTypeEnum
{
    use Enum;

    const TYPE_NONE     = 'my-0';
    const TYPE_SMALL    = 'page-bundle-margin-small';
    const TYPE_NORMAL   = 'page-bundle-margin-standard';
    const TYPE_TOP      = 'page-bundle-margin-top';
    const TYPE_BOTTOM   = 'page-bundle-margin-bottom';

    protected static array $typeName = [
        self::TYPE_NONE => 'Aucune marge',
        self::TYPE_SMALL => 'Petite marge',
        self::TYPE_NORMAL => 'Normale',
        self::TYPE_TOP => 'Marge haute',
        self::TYPE_BOTTOM => 'Marge basse',
    ];
}
