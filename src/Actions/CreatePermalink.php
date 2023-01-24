<?php

namespace AkrilliA\LaravelPermalinks\Actions;

use AkrilliA\LaravelPermalinks\Exception\SlugAlreadyUsedException;
use AkrilliA\LaravelPermalinks\Models\Permalink;

class CreatePermalink
{
    public static function execute(string $url, string $slug = null): Permalink
    {
        if ($slug === null) {
            $slug = GenerateSlug::execute($url);
        }

        $exists = Permalink::query()->where('slug', $slug)->exists();

        if ($exists) {
            throw new SlugAlreadyUsedException($slug);
        }

        return Permalink::create(['slug' => $slug, 'url' => $url]);
    }
}