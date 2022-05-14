<?php

namespace Hippocampe\Bundle\PageBundle;

use EasyCorp\Bundle\EasyAdminBundle\DependencyInjection\CreateControllerRegistriesPass;
use Hippocampe\Bundle\PageBundle\DependencyInjection\PageBundleExtension;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PageBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function getContainerExtension(): PageBundleExtension
    {
        return new PageBundleExtension();
    }

    public function process(ContainerBuilder $container): void
    {
        if ($container->hasDefinition('twig.loader.native_filesystem')){
            $bundleDirectory = \dirname(__DIR__,2);
            $twigFilesystemLoaderDefinition = $container->getDefinition('twig.loader.native_filesystem');
            $twigFilesystemLoaderDefinition->addMethodCall('addPath', [$bundleDirectory.'/views', 'Page']);
        }

        $container->addCompilerPass(new CreateControllerRegistriesPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION);
    }
}