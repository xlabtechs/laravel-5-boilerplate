<?php

    /**
    * Test19 Management
    * All route names are prefixed with 'admin.test19'.
    */
    Route::group([
    'namespace' => 'Test19',
    'middleware' => 'role:administrator',
    ], function () {
    /*
    * Test19 CRUD
    */
    Route::resource('test19', 'Test19Controller');

});
