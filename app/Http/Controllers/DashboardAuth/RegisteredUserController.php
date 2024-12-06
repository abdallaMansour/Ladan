<?php

namespace App\Http\Controllers\DashboardAuth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Http\Resources\Auth\AuthResource;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return new AuthResource($user);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw new HttpResponseException(response()->json([
                'message' => 'The provided credentials are incorrect.',
            ], 401));
        }

        // Revoke all tokens...
        $user->tokens()->delete();

        // Revoke a specific token...
        $user->tokens()->where('id', $user->id)->delete();

        return new AuthResource($user);
    }

    /** @return \Illuminate\Http\JsonResponse */
    public function logout(): \Illuminate\Http\JsonResponse
    {
        try {
            auth()->guard('sanctum')->user()->tokens()->delete();

            return response()->json([
                'message' => 'logged out'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Error on logout : ' . $th->getMessage()
            ], 500);
        }
    }
}
