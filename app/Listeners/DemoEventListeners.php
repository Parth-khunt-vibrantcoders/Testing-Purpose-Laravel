<?php

namespace App\Listeners;

use App\Event\DemoEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Eventdemo;
class DemoEventListeners
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Event\DemoEvent  $event
     * @return void
     */
    public function handle(DemoEvent $event)
    {
        $objEventdemo = new Eventdemo();
        $return = $objEventdemo->addEvent($event->text);
    }
}
