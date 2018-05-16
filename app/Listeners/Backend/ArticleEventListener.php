<?php

namespace App\Listeners\Backend\Auth\Article;

/**
 * Class ArticleEventListener.
 */
class ArticleEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Article Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Article Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Article Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Article\ArticleCreated::class,
            'App\Listeners\Backend\Auth\Article\ArticleEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Article\ArticleUpdated::class,
            'App\Listeners\Backend\Auth\Article\ArticleEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Article\ArticleDeleted::class,
            'App\Listeners\Backend\Auth\Article\ArticleEventListener@onDeleted'
        );
    }
}
