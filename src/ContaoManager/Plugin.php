<?php

declare(strict_types=1);

/*
 * This file is part of Route.
 * 
 * (c) Bernhard Renner <info@berecont.at>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/berecont/contao-route-bundle
 */

namespace Berecont\ContaoRouteBundle\ContaoManager;

use Berecont\ContaoRouteBundle\BerecontContaoRouteBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Class Plugin
 */
class Plugin implements BundlePluginInterface
{
    /**
     * @return array
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(BerecontContaoRouteBundle::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class
                ]),
        ];
    }
}