<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Documents\Http\Controllers'], function()
{

    Route::resource('documents/stored', StoredController::class);
    Route::resource('documents/forms', FormsController::class);
    Route::resource('documents', DocumentsController::class);

});
