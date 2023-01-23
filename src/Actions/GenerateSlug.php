<?php

namespace AkrilliA\LaravelPermalinks\Actions;

use AkrilliA\LaravelPermalinks\Models\Permalink;
use Illuminate\Support\Str;

class GenerateSlug
{
    public function execute(string $name): string
    {
        $slug = Str::slug($name);
        $slugAppendix = config('permalinks.slug_appendix', 4);

        while (Permalink::query()->where('slug', $slug)->exists()) {
            $slug = Str::slug($name) . '-' . Str::random($slugAppendix);
        }

        return $slug;
    }
}