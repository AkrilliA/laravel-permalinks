<?php

namespace AkrilliA\LaravelPermalinks\Actions;

use AkrilliA\LaravelPermalinks\Exception\SlugAlreadyUsedException;
use AkrilliA\LaravelPermalinks\Models\Permalink;

class CreatePermalink
{
    public function execute(string $slug, string $url): Permalink
    {
        $exists = Permalink::query()->where('slug', $slug)->exists();

        if ($exists) {
            throw new SlugAlreadyUsedException($slug);
        }

        return Permalink::create(['slug' => $slug, 'url' => $url]);
    }
}