<?php

namespace App\Services;

use Illuminate\Support\Str;

class RandomStringService
{
    public function generateRandomString($length = 20)
    {
        return Str::random($length);
    }
}
