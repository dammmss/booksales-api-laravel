<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    
    protected function unauthenticated($request, array $guards)
    {
        abort(response()->json([
            'success' => false,
            'message' => 'Unauthenticated. Please provide a valid token.'
        ], 401));
    }

  
    protected function redirectTo($request): ?string
    {
        return null;
    }
}
