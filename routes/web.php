<?php

use App\Livewire\AddPage;
use App\Livewire\Users\AllUser;
use App\Livewire\Users\ShowUser;
use App\Livewire\Users\StoreUser;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('all', AddPage::class);
Route::view('says', 'says');
Route::get('users', AllUser::class);
Route::get('{user}/user', ShowUser::class)->name('edit.user');
Route::get('add-user', StoreUser::class)->name('store.user')->middleware('can:can-access');

//Route::post('/{user}/store', [AllUser::class, 'storeUser'])->name('store.user');

require __DIR__.'/auth.php';
