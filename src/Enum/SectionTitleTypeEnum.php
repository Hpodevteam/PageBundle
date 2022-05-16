<?php

namespace Hippocampe\Bundle\PageBundle\Enum;

class SectionTitleTypeEnum
{
    use Enum;

    const TYPE_SMALL = 'h3';
    const TYPE_NORMAL = 'h2';
    const TYPE_BIG = 'h1';
    const TYPE_HIDDEN = 'd-none';

    protected static array $typeName = [
        self::TYPE_SMALL => 'Titre petit',
        self::TYPE_NORMAL => 'Titre normal',
        self::TYPE_BIG => 'Gros titre',
        self::TYPE_HIDDEN => 'Titre caché',
    ];
}
