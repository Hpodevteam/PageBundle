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
                        ->arrayNode('colors')
                            ->children()
                                ->arrayNode('color1')
                                    ->children()
                                        ->variableNode('name')->end()
                                        ->variableNode('value')->end()
                                    ->end()
                                ->end()
                                ->arrayNode('color2')
                                    ->children()
                                        ->variableNode('name')->end()
                                        ->variableNode('value')->end()
                                    ->end()
                                ->end()
                                ->arrayNode('color3')
                                    ->children()
                                        ->variableNode('name')->end()
                                        ->variableNode('value')->end()
                                    ->end()
                                ->end()
                                ->arrayNode('color4')
                                    ->children()
                                        ->variableNode('name')->end()
                                        ->variableNode('value')->end()
                                    ->end()
                                ->end()
                                ->arrayNode('color5')
                                    ->children()
                                        ->variableNode('name')->end()
                                        ->variableNode('value')->end()
                                    ->end()
                                ->end()
                                ->arrayNode('color6')
                                    ->children()
                                        ->variableNode('name')->end()
                                        ->variableNode('value')->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
        ;

        return $treeBuilder;
    }
}