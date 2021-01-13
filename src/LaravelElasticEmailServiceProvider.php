<?php

namespace Rdanusha\LaravelElasticEmail;

use GuzzleHttp\Client;
use Illuminate\Mail\MailManager;
use Illuminate\Support\ServiceProvider;

class LaravelElasticEmailServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->resolving(MailManager::class, function (MailManager $manager) {
            $manager->extend('elastic_email', function () {
                $config = $this->app['config']->get('services.elastic_email', []);

                return new ElasticTransport(
                    new Client($config),
                    $config['key']
                );
            });
        });
    }
}