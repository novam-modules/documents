<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Documents\Http\Controllers'], function()
{
    Route::resource('documents', DocumentsController::class);

});
