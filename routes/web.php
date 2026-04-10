<?php

use App\Models\Destination;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

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
    return view( view: 'pages.destinasi', data: compact('destinasi'));

});


Route:: get( uri: "/destinations", action: [DestinationController::class, 'index']);
Route::get(uri: "/destinations/{id}", action: [DestinationController::class, 'show']);
Route::get("/destination/create", [DestinationController::class, 'create']);
Route::post("/destinations", [DestinationController::class, 'store']);
Route::delete('/destinations/{id}', [DestinationController::class, 'delete']);
Route::get("/destination/{id}/edit", [DestinationController::class, 'edit']);
Route::put("/destination/{id}/update", [DestinationController::class, 'update']);
