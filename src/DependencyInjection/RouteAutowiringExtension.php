<?php

/*
 * This file is part of the Rollerworks RouteAutowiringBundle package.
 *
 * (c) Sebastiaan Stok <s.stok@rollerscapes.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Rollerworks\Bundle\RouteAutowiringBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

final class RouteAutowiringExtension extends Extension
{
    const EXTENSION_ALIAS = 'rollerworks_route_autowiring';

    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config/services/'));
        $loader->load('routing.xml');
    }

    public function getConfiguration(array $config, ContainerBuilder $container)
    {
        // no-op
    }

    public function getAlias()
    {
        return self::EXTENSION_ALIAS;
    }
}
