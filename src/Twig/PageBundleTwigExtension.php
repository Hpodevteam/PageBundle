<?php

namespace Hippocampe\Bundle\PageBundle\Twig;

use Symfony\Component\DependencyInjection\ServiceLocator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PageBundleTwigExtension extends AbstractExtension
{
    private $serviceLocator;

    public function __construct(ServiceLocator $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('getEntity', [$this, 'getEntity']),
        ];
    }

    public function getEntity($data)
    {
        var_dump($data);
    }
}