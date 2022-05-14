<?php
/**
 * Trait used for TypeEnum static classes
 * Be aware that the class using the trait must implement
 * the static variable $typeName
 *
 * User: cyril
 * Date: 07/09/17
 * Time: 12:25
 */

namespace Hippocampe\Bundle\PageBundle\Enum;

Trait Enum
{
    /**
     * @param string $typeShortName
     * @return string
     */
    public static function getTypeName(string $typeShortName): string
    {
        if (!isset(self::$typeName[$typeShortName])) {
            return "Unknown type ($typeShortName)";
        }

        return self::$typeName[$typeShortName];
    }

    /**
     * @return array
     */
    public static function getTypeNames(): array
    {
        return self::$typeName;
    }

    /**
     * @return array<string>
     */
    public static function getAvailableTypes(): array
    {
        return array_keys(self::$typeName);
    }

    public static function getChoices(): array
    {
        return array_flip(self::$typeName);
    }
}
