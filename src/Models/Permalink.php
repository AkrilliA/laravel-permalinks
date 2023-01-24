<?php

namespace AkrilliA\LaravelPermalinks\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Permalink extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function slug(string $slug): static
    {
        return static::query()->where('slug', $slug)->firstOrFail();
    }
}