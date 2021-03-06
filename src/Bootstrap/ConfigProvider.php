<?php

namespace Bootdi\Bootstrap;


use Bootdi\App;
use Bootdi\Providers\BaseServiceProvider;
use Config\Loader\FileLoader;
use Config\Repository;

class ConfigProvider extends BaseServiceProvider
{

    public function bootstrap(App $app)
    {
        $conf = new Repository(new FileLoader($app->configPath()), "");
        $app->instance("config", $conf);

        date_default_timezone_set($conf->get("app.timezone"));

        mb_internal_encoding('UTF-8');
    }
}