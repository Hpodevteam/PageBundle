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
        $this->loadResources($container);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

        $loader->load('services.yaml');

        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('page.sections.spacer', $config['sections']['spacer']);
        $container->setParameter('page.sections.colors', $config['sections']['colors']);
    }

    private function loadResources(ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

        $resources = [
            //'fos_ck_editor',
        ];

        foreach ($resources as $resource) {
            $loader->load($resource . '.yaml');
        }
    }

    public function getAlias(): string
    {
        return 'page';
    }
}
