<?php
namespace App\Listeners\Backend;

/**
* Class Test20EventListener.
*/
/**
* Class Test20Created.
*/
class Test20EventListener

{
    /**
    * @param $event
    */
    public function onCreated($event)
    {
    \Log::info('Test20 Created');
    }

    /**
    * @param $event
    */
        public function onUpdated($event)
        {
        \Log::info('Test20  Updated');
        }

    /**
    * @param $event
    */
    public function onDeleted($event)
    {
    \Log::info('Test20 Deleted');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param \Illuminate\Events\Dispatcher $events
    */
    public function subscribe($events)
    {
            $events->listen(
            \App\Events\Backend\Test20\Test20Created::class,
            'App\Listeners\Backend\Test20EventListener@onCreated'
            );

            $events->listen(
            \App\Events\Backend\Test20\Test20Updated::class,
            'App\Listeners\Backend\Test20EventListener@onUpdated'
            );

            $events->listen(
            \App\Events\Backend\Test20\Test20Deleted::class,
            'App\Listeners\Backend\Test20EventListener@onDeleted'
            );
    }
}
