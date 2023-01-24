<?php

use AkrilliA\LaravelPermalinks\Models\Permalink;
use Illuminate\Support\Facades\Route;

Route::get('/{permalink}', function ($permalink) {
    $permalink = Permalink::query()->where('url', $permalink)->firstOrFail();

    return redirect($permalink->url);
})->name('permalink');
