<?php
/**
 * Created by PhpStorm.
 * User: cyril
 * Date: 07/09/17
 * Time: 12:25
 */

namespace Hippocampe\Bundle\PageBundle\Enum;


class SectionStyleTypeEnum
{
    use Enum;

    const TYPE_NORMAL   = '';
    const TYPE_NONE     = 'none';
    const TYPE_SMALL    = 'small';
    const TYPE_TOP      = 'top';
    const TYPE_BOTTOM   = 'bottom';

    protected static $typeName = [
        self::TYPE_NORMAL => 'Normale',
        self::TYPE_NONE => 'Aucune marge',
        self::TYPE_SMALL => 'Petite marge',
        self::TYPE_TOP => 'Marge haute',
        self::TYPE_BOTTOM => 'Marge basse',
    ];
}
