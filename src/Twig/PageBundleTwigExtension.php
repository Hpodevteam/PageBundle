<?php

namespace Hippocampe\Bundle\PageBundle\Twig;

use Hippocampe\Bundle\PageBundle\Entity\Section;
use Hippocampe\Bundle\PageBundle\Entity\SectionBarChart;
use Hippocampe\Bundle\PageBundle\Entity\SectionBarChartY;
use Hippocampe\Bundle\PageBundle\Entity\SectionLineChart;
use Hippocampe\Bundle\PageBundle\Entity\SectionPieChart;
use Hippocampe\Bundle\PageBundle\Enum\SectionTypeEnum;
use Hippocampe\Bundle\PageBundle\Repository\SectionRepository;
use Symfony\Component\DependencyInjection\ServiceLocator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PageBundleTwigExtension extends AbstractExtension
{
    private ?string $spacer;

    private SectionRepository $sectionRepository;

    public function __construct(?string $spacer, SectionRepository $sectionRepository)
    {
        $this->spacer = $spacer;
        $this->sectionRepository = $sectionRepository;

        $this->chartSections = [
            SectionPieChart::class,
            SectionBarChart::class,
            SectionLineChart::class,
            SectionBarChartY::class,
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('getEntity', [$this, 'getEntity']),
            new TwigFunction('spacerValue', [$this, 'spacerValue']),
            new TwigFunction('isChart', [$this, 'isChart'])
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

    public function isChart($class): bool
    {
        $className = (new \ReflectionClass($class))->getName();

        if (in_array($className, $this->chartSections)) {
            return true;
        }

        return false;
    }
}