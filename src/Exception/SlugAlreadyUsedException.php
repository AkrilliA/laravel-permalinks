<?php

namespace AkrilliA\LaravelPermalinks\Exception;

use Exception;

class SlugAlreadyUsedException extends Exception
{
    public function __construct(string $slug)
    {
        parent::__construct("The slug $slug is already in use. You could use GenerateSlug to generate a unique slug.");
    }
}
