<?php
/**
 * @package JsHintBundle
 *
 * @author Daniel Holzmann <d@velopment.at>
 * @date 08.03.14
 * @time 17:27
 */

namespace CodeLovers\JsHintBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('code_lovers_js_hint');

        $rootNode
            ->children()
                ->scalarNode('jshint_bin')
                    ->defaultValue('/usr/bin/jshint')
                    ->info('the path to the jshint binary')
                    ->example('/usr/bin/jshint')
                ->end()
            ->end();

        return $treeBuilder;
    }
}