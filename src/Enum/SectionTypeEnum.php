<?php

namespace Hippocampe\Bundle\PageBundle\Enum;


class SectionTypeEnum
{
    use Enum;

    const TYPE_TEXT         = 'SectionText';
    const TYPE_IMAGE        = 'SectionImage';
    const TYPE_TEXTIMAGE    = 'SectionTextImage';
    const TYPE_SHORTCODE    = 'SectionShortCode';
    const TYPE_TEXT2COL     = 'SectionText2Col';
    const TYPE_TABLE        = 'SectionTable';
    const TYPE_PIE_CHART    = 'SectionPieChart';
    const TYPE_BAR_CHART    = 'SectionBarChart';
    const TYPE_BAR_CHART_Y  = 'SectionBarChartY';
    const TYPE_LINE_CHART   = 'SectionLineChart';

    protected static array $typeName = [
        self::TYPE_TEXT => 'Section Texte',
        self::TYPE_IMAGE => 'Section Image',
        self::TYPE_TEXTIMAGE => 'Section Texte & Image',
        self::TYPE_SHORTCODE => 'Section dynamique',
        self::TYPE_TEXT2COL => 'Section texte 2 colonnes',
        self::TYPE_TABLE => 'Section table HTML',
        self::TYPE_PIE_CHART => 'Section | Graphique | Circulaire',
        self::TYPE_BAR_CHART => 'Section | Graphique | Barres (Colonnes)',
        self::TYPE_BAR_CHART_Y => 'Section | Graphique | Barres (Lignes)',
        self::TYPE_LINE_CHART => 'Section | Graphique | Lignes'
    ];
}
