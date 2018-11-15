<?php

Route::get('/concerts/{id}', 'ConcertsController@show');

Route::post('/concerts/{id}/orders', 'ConcertOrdersController@store');
