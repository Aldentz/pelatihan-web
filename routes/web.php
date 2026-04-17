<?php

use App\Http\Controllers\AttractionController;
use App\Models\Destination;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\UserController;
use Faker\Guesser\Name;

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: "/halo", action: function () {
    $name = "Aldentz";
    $hobi = "Coding";
    $umur = 19; 
    return view( view: 'halo', data: compact('name', 'hobi', 'umur'));
});

Route::get(uri: "/switch", action: function () {
    $role = "admin";
    return view( view: 'switch', data: compact('role'));
});

Route::get(uri: "/master", action: function () {
    return view( view: 'pages.home');
});

Route::get(uri: "/about", action: function () {
    return view( view: 'pages.about');
});

Route::get(uri: "/destinasi", action: function () {
    $destinasi = [
        "nama" => "Bali",
        "harga" => "Rp 5.000.000",
        "lokasi" => "Denpasar, Bali",
        "durasi" => "4 Hari 3 Malam",
        "transportasi" => "Pesawat",
        "hotel" => "Bintang 4",
        "rating" => 4.8,
        "fasilitas" => ["Hotel", "Sarapan", "Tour Guide", "Transport Lokal"],
    ];
    return view( view: 'pages.Destinations.destinasi', data: compact('destinasi'));

});

Route::prefix( 'destinations')->name('destinations.')->group( function(){
    Route::get( '/', action: [DestinationController::class, 'index'])->name(name: 'index');
    Route::get( '/create', action: [DestinationController::class, 'create'])->name(name: 'create');
    Route::post( '/', action: [DestinationController::class, 'store'])->name(name: 'store');
    Route::get( '/{id}/edit', action: [DestinationController::class, 'edit'])->name(name: 'edit');
    Route::put('/{id}', action: [DestinationController::class, 'update'])->name(name: 'update');
    Route::delete( '/{id}', action: [DestinationController::class, 'delete'])->name(name: 'destroy');
    Route::get( '/{id}/show', action: [DestinationController::class, 'show'])->name(name: 'show');

});


Route::prefix('users')->name('users.')->group( function(){
    Route::get('/', action: [UserController::class, 'index'])->name(name: 'index');
    Route::get( '/create', action: [UserController::class, 'create'])->name(name: 'create');
    Route::post( '/', action: [UserController::class, 'store'])->name(name: 'store');
    Route::get( '/{id}/edit', action: [UserController::class, 'edit'])->name(name: 'edit');
    Route::put( '/{id}', action: [UserController::class, 'update'])->name(name: 'update');
    Route::delete( '/{id}', action: [UserController::class, 'delete'])->name(name: 'destroy');
    Route::get( '/{id}/show', action: [UserController::class, 'show'])->name(name: 'show');
});

Route::prefix('attractions')->name('attractions.')->group( function(){
    Route::get('/', action: [AttractionController::class, 'index'])->name(name: 'index');
    Route::get( '/create', action: [AttractionController::class, 'create'])->name(name: 'create');
    Route::post( '/', action: [AttractionController::class, 'store'])->name(name: 'store');
    Route::get( '/{id}/edit', action: [AttractionController::class, 'edit'])->name(name: 'edit');
    Route::put( '/{id}', action: [AttractionController::class, 'update'])->name(name: 'update');
    Route::delete( '/{id}', action: [AttractionController::class, 'delete'])->name(name: 'destroy');
    Route::get( '/{id}/show', action: [AttractionController::class, 'show'])->name(name: 'show');
});

use App\Http\Controllers\ReviewController;
Route::resource('reviews', ReviewController::class);
