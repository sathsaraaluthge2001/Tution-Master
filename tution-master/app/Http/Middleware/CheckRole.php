<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        Log::info('CheckRole middleware triggered');
        
        if (!Auth::check()) {
            Log::warning('User not authenticated');
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $user = Auth::user();
        Log::info('Authenticated user:', ['user' => $user]);

        if (!in_array($user->role, $roles)) {
            Log::warning('User does not have the required role', ['role' => $user->role]);
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        return $next($request);
    }
}
