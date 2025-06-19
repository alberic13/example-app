<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::resource('siswa', SiswaController::class);

// Admin route to access the Siswa data table
Route::get('/admin', [App\Http\Controllers\SiswaController::class, 'index'])->name('admin');

// Export routes
Route::get('/siswa/export/excel', [App\Http\Controllers\SiswaController::class, 'exportExcel'])->name('siswa.export.excel');
Route::get('/siswa/export/pdf', [App\Http\Controllers\SiswaController::class, 'exportPdf'])->name('siswa.export.pdf');

require __DIR__.'/auth.php';
