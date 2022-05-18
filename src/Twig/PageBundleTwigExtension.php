<?php

namespace Hippocampe\Bundle\PageBundle\Twig;

use Hippocampe\Bundle\PageBundle\Entity\Section;
use Hippocampe\Bundle\PageBundle\Enum\SectionTypeEnum;
use Symfony\Component\DependencyInjection\ServiceLocator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PageBundleTwigExtension extends AbstractExtension
{
    private ?string $spacer;

    public function __construct(?string $spacer)
    {
        $this->spacer = $spacer;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('getEntity', [$this, 'getEntity']),
            new TwigFunction('spacerValue', [$this, 'spacerValue']),
            new TwigFunction('isChartSection', [$this, 'isChartSection'])
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

    public function spacerValue(): ?string
    {
        if ($this->spacer) {
            return $this->spacer;
        }

        return null;
    }

    public function isChartSection(Section $section): bool
    {
        if ($section->getClassName() == SectionTypeEnum::TYPE_PIE_CHART) {
            return true;
        }

        return false;
    }
}