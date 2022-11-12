<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/example", [\App\Http\Controllers\Example\IndexController::class, "index"])->name("example.index");

Route::get("/example/create", [\App\Http\Controllers\Example\CreateController::class, "index"]);

Route::post("/example/posts", [\App\Http\Controllers\Example\StoreController::class, "index"]);

Route::get("/example/{id}", [\App\Http\Controllers\Example\ShowController::class, "index"])->name("example.show");

Route::get("/example/{id}/edit", [App\Http\Controllers\Example\EditController::class, "index"])->name("example.edit");

Route::put("/example/{id}", [App\Http\Controllers\Example\UpdateController::class, "index"])->name("example.up");

Route::delete("/example/{id}", [App\Http\Controllers\Example\DestroyController::class, "index"]);