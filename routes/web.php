<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users = Http::get('https://933f-190-148-157-149.ngrok.io/ServiceSimulator-v2/webresources/service/mcv2/consumption');
        $usersArray = [];
        $usersArray = $users->json();
        $usersArray = $usersArray['pcrfData']['tekelecState']['properties'];
        //dd($usersArray);

        return view('dashboard', compact('usersArray'));
    
})->name('dashboard');

//Route::post('dashboard', [NitController::class, 'listar']);
//Route::resource('dashboard', );
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [Controller::class, 'listar'])->name('dashboard');