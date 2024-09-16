<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\ProcessPodcast;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dispatch-job', function () {
    ProcessPodcast::dispatch();
    return 'Job dispatched!';
});