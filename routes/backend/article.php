<?php



/**
 * Article Management
 * All route names are prefixed with 'admin.article'.
 */

Route::group([
    'namespace' => 'Article',
    'middleware' => 'role:administrator',
], function () {
    /*
     * Article CRUD
    */
    Route::resource('article', 'ArticleController');
});