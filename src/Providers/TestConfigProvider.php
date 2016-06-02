<?php

namespace Bootdi\Providers;


use Bootdi\App;
use Bootdi\Contracts\Providers\ConfigServiceProvider;

class TestConfigProvider implements ConfigServiceProvider
{

    /**
     * @param App $app
     * @return mixed
     */
    public function register(App $app)
    {
        assert("is_int(10)");
    }
}