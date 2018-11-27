<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});


//start_Test19_start
Breadcrumbs::register('admin.test19.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.test19s.title'), route('admin.test19.index'));
});



Breadcrumbs::register('admin.test19.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.test19.index');
$breadcrumbs->push(__('labels.backend.test19s.create'), route('admin.test19.create'));
});

Breadcrumbs::register('admin.test19.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.test19.index');
$breadcrumbs->push(__('menus.backend.test19s.view'), route('admin.test19.show', $id));
});

Breadcrumbs::register('admin.test19.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.test19.index');
$breadcrumbs->push(__('menus.backend.test19s.edit'), route('admin.test19.edit', $id));
});
//end_Test19_end

//*****Do Not Delete Me

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
