<?php

    /**
    * Test20 Management
    * All route names are prefixed with 'admin.test20'.
    */
    Route::group([
    'namespace' => 'Test20',
    'middleware' => 'role:administrator',
    ], function () {
    /*
    * Test20 CRUD
    */
    Route::resource('test20', 'Test20Controller');

});
