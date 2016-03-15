<?php

namespace LumenDiary\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'LumenDiary\Events\SomeEvent' => [
            'LumenDiary\Listeners\EventListener',
        ],
    ];
}
