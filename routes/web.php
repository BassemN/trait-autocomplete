<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $category = \App\Models\Category::with('parent')->first();

    return $category->parent->name;
});
