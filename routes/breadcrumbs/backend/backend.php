
<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::register('admin.branch.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.branches.title'), route('admin.branch.index'));
});

    
Breadcrumbs::register('admin.branch.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.branch.index');
$breadcrumbs->push(__('labels.backend.branches.create'), route('admin.branch.create'));
});

Breadcrumbs::register('admin.branch.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.branch.index');
$breadcrumbs->push(__('menus.backend.branches.view'), route('admin.branch.show', $id));
});

Breadcrumbs::register('admin.branch.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.branch.index');
$breadcrumbs->push(__('menus.backend.branches.edit'), route('admin.branch.edit', $id));
});

Breadcrumbs::register('admin.customer.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.customers.title'), route('admin.customer.index'));
});

            Breadcrumbs::register('admin.customer.branch', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.dashboard');
       $breadcrumbs->push(__('strings.backend.customers.title'), route('admin.customer.index'));
       });
    
Breadcrumbs::register('admin.customer.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.customer.index');
$breadcrumbs->push(__('labels.backend.customers.create'), route('admin.customer.create'));
});

Breadcrumbs::register('admin.customer.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.customer.index');
$breadcrumbs->push(__('menus.backend.customers.view'), route('admin.customer.show', $id));
});

Breadcrumbs::register('admin.customer.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.customer.index');
$breadcrumbs->push(__('menus.backend.customers.edit'), route('admin.customer.edit', $id));
});

Breadcrumbs::register('admin.employee.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.employees.title'), route('admin.employee.index'));
});

            Breadcrumbs::register('admin.employee.book', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.dashboard');
       $breadcrumbs->push(__('strings.backend.employees.title'), route('admin.employee.index'));
       });
            Breadcrumbs::register('admin.employee.branch', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.dashboard');
       $breadcrumbs->push(__('strings.backend.employees.title'), route('admin.employee.index'));
       });
    
Breadcrumbs::register('admin.employee.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.employee.index');
$breadcrumbs->push(__('labels.backend.employees.create'), route('admin.employee.create'));
});

Breadcrumbs::register('admin.employee.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.employee.index');
$breadcrumbs->push(__('menus.backend.employees.view'), route('admin.employee.show', $id));
});

Breadcrumbs::register('admin.employee.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.employee.index');
$breadcrumbs->push(__('menus.backend.employees.edit'), route('admin.employee.edit', $id));
});

Breadcrumbs::register('admin.book.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.books.title'), route('admin.book.index'));
});

            Breadcrumbs::register('admin.book.employee', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.dashboard');
       $breadcrumbs->push(__('strings.backend.books.title'), route('admin.book.index'));
       });
    
Breadcrumbs::register('admin.book.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.book.index');
$breadcrumbs->push(__('labels.backend.books.create'), route('admin.book.create'));
});

Breadcrumbs::register('admin.book.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.book.index');
$breadcrumbs->push(__('menus.backend.books.view'), route('admin.book.show', $id));
});

Breadcrumbs::register('admin.book.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.book.index');
$breadcrumbs->push(__('menus.backend.books.edit'), route('admin.book.edit', $id));
});

Breadcrumbs::register('admin.issue.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.issues.title'), route('admin.issue.index'));
});

            Breadcrumbs::register('admin.issue.customer', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.dashboard');
       $breadcrumbs->push(__('strings.backend.issues.title'), route('admin.issue.index'));
       });
            Breadcrumbs::register('admin.issue.book', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.dashboard');
       $breadcrumbs->push(__('strings.backend.issues.title'), route('admin.issue.index'));
       });
    
Breadcrumbs::register('admin.issue.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.issue.index');
$breadcrumbs->push(__('labels.backend.issues.create'), route('admin.issue.create'));
});

Breadcrumbs::register('admin.issue.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.issue.index');
$breadcrumbs->push(__('menus.backend.issues.view'), route('admin.issue.show', $id));
});

Breadcrumbs::register('admin.issue.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.issue.index');
$breadcrumbs->push(__('menus.backend.issues.edit'), route('admin.issue.edit', $id));
});

Breadcrumbs::register('admin.reverse.index', function ($breadcrumbs) {
$breadcrumbs->parent('admin.dashboard');
$breadcrumbs->push(__('strings.backend.reverses.title'), route('admin.reverse.index'));
});

            Breadcrumbs::register('admin.reverse.customer', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.dashboard');
       $breadcrumbs->push(__('strings.backend.reverses.title'), route('admin.reverse.index'));
       });
            Breadcrumbs::register('admin.reverse.book', function ($breadcrumbs) {
        $breadcrumbs->parent('admin.dashboard');
       $breadcrumbs->push(__('strings.backend.reverses.title'), route('admin.reverse.index'));
       });
    
Breadcrumbs::register('admin.reverse.create', function ($breadcrumbs) {
$breadcrumbs->parent('admin.reverse.index');
$breadcrumbs->push(__('labels.backend.reverses.create'), route('admin.reverse.create'));
});

Breadcrumbs::register('admin.reverse.show', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.reverse.index');
$breadcrumbs->push(__('menus.backend.reverses.view'), route('admin.reverse.show', $id));
});

Breadcrumbs::register('admin.reverse.edit', function ($breadcrumbs, $id) {
$breadcrumbs->parent('admin.reverse.index');
$breadcrumbs->push(__('menus.backend.reverses.edit'), route('admin.reverse.edit', $id));
});

//*****Do Not Delete Me













require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
