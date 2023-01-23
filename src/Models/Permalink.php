<?php

namespace AkrilliA\LaravelPermalinks\Models;

use Illuminate\Database\Eloquent\Model;

class Permalink extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
}