<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Admin\{
    SiteController,
    EndpointController,
    CheckController
};
use App\Jobs\EndpointCheckJob;
use App\Models\Endpoint;
use Carbon\Carbon;

Route::get('job', function() {
    $horaAtual = now();
    $novaHora = now()->addMinutes(1);
    return [
        'Hora Atual' => $horaAtual,
        'Nova Hora'  => $novaHora
    ];
});

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/endpoints/{endpoint}/logs', [CheckController::class, 'index'])->name('endpoints.checks');

    Route::resource('/sites/{site}/endpoints', EndpointController::class);

    Route::delete('/sites/{site}', [SiteController::class, 'destroy'])->name('sites.destroy');
    Route::put('/sites/{site}/update', [SiteController::class, 'update'])->name('sites.update');
    Route::get('/sites/{site}/edit', [SiteController::class, 'edit'])->name('sites.edit');
    Route::post('/sites', [SiteController::class, 'store'])->name('sites.store');
    Route::get('/sites/create', [SiteController::class, 'create'])->name('sites.create');
    Route::get('/sites', [SiteController::class, 'index'])->name('sites.index');

    Route::get('/common-questions', [QuestionController::class, 'index'])->name('questions');
});

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
