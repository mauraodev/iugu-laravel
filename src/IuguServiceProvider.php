<?php

namespace mauraodev;

use Config;
use Illuminate\Support\ServiceProvider;

/**
 * IuguServiceProvider ─ The provider. Woah!
 *
 * @author Mateus Felipe <mateusfccp@gmail.com>
 * @package IuguLaravel
 * @version 1.3
 */
class IuguServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return  void
     */
    public function boot()
    {
        $conf = config('app.env') === 'production' ? 'iugu_laravel.production.IUGU_API_KEY' : 'iugu_laravel.test.IUGU_API_KEY';

        Iugu\Iugu::setApiKey(Config::get($conf));

        // Publish configuration assets
        $this->publishes([
            __DIR__ . '/config/iugu_laravel.php' => config_path('iugu_laravel.php'),
        ]);
    }
}
