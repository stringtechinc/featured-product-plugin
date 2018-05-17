<?php

/*
 * This file is part of the FeaturedProduct
 *
 * Copyright (C) 2018 StringTech Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\FeaturedProduct\ServiceProvider;

use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

class FeaturedProductServiceProvider implements ServiceProviderInterface
{
    public function register(BaseApplication $app)
    {
        $app->match(
            '/block/featured_product',
            'Plugin\FeaturedProduct\Controller\Block\FeaturedProductController::index'
        )->bind('block_featured_product');
    }

    public function boot(BaseApplication $app)
    {
    }

}
