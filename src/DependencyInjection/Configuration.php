<?php

namespace Hippocampe\Bundle\PageBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('page');

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('sections')
                    ->children()
                        ->variableNode('spacer')->end()
                        ->variableNode('vich_uploader_path')->end()
                    ->end()
                ->end()
        ;

        return $treeBuilder;
    }
}