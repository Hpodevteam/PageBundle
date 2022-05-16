<?php

namespace Hippocampe\Bundle\PageBundle\Twig;

use Symfony\Component\DependencyInjection\ServiceLocator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PageBundleTwigExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('getEntity', [$this, 'getEntity']),
        ];
    }

    public function getEntity($data): ?string
    {
        try {
            return (new \ReflectionClass($data))->getShortName();
        } catch (\ReflectionException $e) {
            return null;
        }
    }
}