<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->save();

        return response()->json(['message' => 'Successfully registered'], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = $request->user();
        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }
    
    public function shorten(Request $request)
    {
        // Validate input
        $request->validate([
            'original_url' => 'required|url',
        ]);

        // Generate a short URL (similar to your existing logic)
        $originalUrl = $request->input('original_url');
        $shortUrl = md5($originalUrl);

        // Ensure the short URL is unique
        while (Url::where('short_url', $shortUrl)->exists()) {
            $shortUrl = md5($originalUrl . microtime());
        }

        // Create a new URL record
        $url = new Url();
        $url->original_url = $originalUrl;
        $url->short_url = $shortUrl;
        $url->click_count = 0;
        $url->user_id = Auth::id();
        $url->save();

        // Return the short URL as JSON response
        return response()->json(['short_url' => $shortUrl]);
    }

    public function redirectToOriginal($shortUrl)
    {
        // Find the original URL based on the short URL
        $url = Url::where('short_url', $shortUrl)->first();

        if ($url) {
            // Increment the click count
            $url->increment('click_count');

            // Redirect to the original URL
            return redirect($url->original_url);
        }

        // Handle URL not found
        return response()->json(['error' => 'URL not found'], 404);
    }
}
