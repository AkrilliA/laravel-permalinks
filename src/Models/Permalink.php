<?php

namespace AkrilliA\LaravelPermalinks\Models;

use AkrilliA\LaravelPermalinks\Actions\GenerateSlug;
use AkrilliA\LaravelPermalinks\Exception\SlugAlreadyUsedException;
use Illuminate\Database\Eloquent\Model;

class Permalink extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function create(string $url, ?string $slug = null)
    {
        if ($slug === null) {
            $slug = GenerateSlug::execute($url);
        }

        $exists = Permalink::query()->where('slug', $slug)->exists();

        if ($exists) {
            throw new SlugAlreadyUsedException($slug);
        }

        return parent::create(['slug' => $slug, 'url' => $url]);
    }

    public static function slug(string $slug): static
    {
        return static::query()->where('slug', $slug)->firstOrFail();
    }
}
