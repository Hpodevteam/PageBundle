<?php
/**
 * Created by PhpStorm.
 * User: cyril
 * Date: 07/09/17
 * Time: 12:25
 */

namespace Hippocampe\Bundle\PageBundle\Enum;


class SectionTitleTypeEnum
{
    use Enum;

    const TYPE_SMALL = 'small';
    const TYPE_NORMAL = 'normal';
    const TYPE_BIG = 'big';
    const TYPE_HIDDEN = 'hidden';

    protected static $typeName = [
        self::TYPE_SMALL => 'Titre petit',
        self::TYPE_NORMAL => 'Titre normal',
        self::TYPE_BIG => 'Gros titre',
        self::TYPE_HIDDEN => 'Titre caché',
    ];
}
