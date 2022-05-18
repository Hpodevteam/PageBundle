<?php

namespace Hippocampe\Bundle\PageBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class PageBundleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');

        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('page.sections.spacer', $config['sections']['spacer']);
        $container->setParameter('page.sections.colors', $config['sections']['colors']);

        /*foreach ($config['sections']['colors'] as $color) {
            $container->setParameter('page.sections.colors.' . $color['name'], $color);
        }*/
    }

    public function getAlias(): string
    {
        return 'page';
    }
}
