<?php
namespace App\Listeners\Backend;

/**
* Class Test19EventListener.
*/
/**
* Class Test19Created.
*/
class Test19EventListener

{
    /**
    * @param $event
    */
    public function onCreated($event)
    {
    \Log::info('Test19 Created');
    }

    /**
    * @param $event
    */
        public function onUpdated($event)
        {
        \Log::info('Test19  Updated');
        }

    /**
    * @param $event
    */
    public function onDeleted($event)
    {
    \Log::info('Test19 Deleted');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param \Illuminate\Events\Dispatcher $events
    */
    public function subscribe($events)
    {
            $events->listen(
            \App\Events\Backend\Test19\Test19Created::class,
            'App\Listeners\Backend\Test19EventListener@onCreated'
            );

            $events->listen(
            \App\Events\Backend\Test19\Test19Updated::class,
            'App\Listeners\Backend\Test19EventListener@onUpdated'
            );

            $events->listen(
            \App\Events\Backend\Test19\Test19Deleted::class,
            'App\Listeners\Backend\Test19EventListener@onDeleted'
            );
    }
}
