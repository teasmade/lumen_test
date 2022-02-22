<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Asset;
use App\Models\WorkDomain;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version() . "test3";
});



Route::get('/api', function () {
    return "ICI L'API";
});

Route::get('/users', function () {
    $users = User
        ::all()
        ->makeHidden(['created_at', 'updated_at', 'work_domain_id']);
    foreach ($users as $user) {
        $user->workDomain->makeHidden(['id', 'created_at', 'updated_at']);
    }
    return $users;
});

Route::get('/assets', function () {
    $assets = Asset::all()
        ->makeHidden(['created_at', 'updated_at']);
    foreach ($assets as $asset) {
        $asset
            ->workDomains
            ->makeHidden([
                'id',
                'created_at',
                'updated_at',
                'pivot',
            ])
            ->toarray();
    }
    return $assets;
});

Route::get('/domain', function () {
    return WorkDomain::all();
});

Route::get('/domain_users', function () {
    $domains = WorkDomain::all()
        ->makeHidden(['id', 'created_at', 'updated_at']);
    foreach ($domains as $domain) {
        $domain->users->makeHidden(['created_at', 'updated_at', 'work_domain_id']);
    }
    return $domains;
});
