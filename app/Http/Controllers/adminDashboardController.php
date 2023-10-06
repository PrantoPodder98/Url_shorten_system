<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class adminDashboardController extends Controller
{
    public function index()
    {
        $urls = Url::all()->where('user_id', Auth::id())->sortByDesc('created_at');
        return view('backend.dashboard.dashboard', ['urls' => $urls]);
    }


    public function shorten(Request $request)
    {
        // Generate a short URL using a hash of the original URL
        $originalUrl = $request->input('original_url');
        $shortUrl = md5($originalUrl);

        // Ensure the short URL is unique
        while (Url::where('short_url', $shortUrl)->exists()) {
            // If it already exists, generate a new short URL
            $shortUrl = md5($originalUrl . microtime()); // Append microtime to make it unique
        }


        $url = new Url();
        $url->original_url = $request->input('original_url');
        $url->short_url = $shortUrl;
        $url->click_count = 0;
        $url->user_id = Auth::id();
        $url->save();

        // return view('backend.dashboard.dashboard');
        return redirect()->route('dashboard');
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
        abort(404);
    }


}
