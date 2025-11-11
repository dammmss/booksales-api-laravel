<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Jika request tidak terautentikasi, kembalikan JSON response, bukan redirect.
     */
    protected function unauthenticated($request, array $guards)
    {
        abort(response()->json([
            'success' => false,
            'message' => 'Unauthenticated. Please provide a valid token.'
        ], 401));
    }

    /**
     * Jangan redirect ke route login (karena ini API).
     */
    protected function redirectTo($request): ?string
    {
        return null;
    }
}
