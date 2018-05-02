<?php

Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::register('admin.article.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(__('strings.backend.articles.title'), route('admin.article.index'));
});


Breadcrumbs::register('admin.article.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.article.index');
    $breadcrumbs->push(__('labels.backend.articles.create'), route('admin.article.create'));
});

Breadcrumbs::register('admin.article.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.article.index');
    $breadcrumbs->push(__('menus.backend.articles.view'), route('admin.article.show', $id));
});

Breadcrumbs::register('admin.article.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.article.index');
    $breadcrumbs->push(__('menus.backend.articles.edit'), route('admin.article.edit', $id));
});



require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
