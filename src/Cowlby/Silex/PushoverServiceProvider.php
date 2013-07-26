<?php

/*
 * This file is part of the pushover-service-provider package.
 *
 * (c) Jose Prado <cowlby@me.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cowlby\Silex;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Cowlby\Pushover\PushoverApp;

/**
 * Silex Service Provider for the Pushover PHP Bindings.
 *
 * @author Jose Prado <cowlby@me.com>
 */
class PushoverServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['pushover'] = $app->share(function(Application $container) {
            return new PushoverApp($app['pushover.token'], $app['pushover.user']);
        });
    }

    public function boot(Application $app)
    {
    }
}
