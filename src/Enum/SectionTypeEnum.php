<?php
/**
 * Created by PhpStorm.
 * User: cyril
 * Date: 07/09/17
 * Time: 12:25
 */

namespace Hippocampe\Bundle\PageBundle\Enum;


class SectionTypeEnum
{
    use Enum;

    const TYPE_TEXT         = 'SectionText';
    const TYPE_IMAGE        = 'SectionImage';
    const TYPE_TEXTIMAGE    = 'SectionTextImage';
    const TYPE_SHORTCODE    = 'SectionShortCode';
    const TYPE_TEXT2COL     = 'SectionText2Col';

    protected static $typeName = [
        self::TYPE_TEXT => 'Section Texte',
        self::TYPE_IMAGE => 'Section Image',
        self::TYPE_TEXTIMAGE => 'Section Texte & Image',
        self::TYPE_SHORTCODE => 'Section dynamique',
        self::TYPE_TEXT2COL => 'Section texte 2 colonnes',
    ];
}
