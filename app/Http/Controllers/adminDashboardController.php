<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;

class adminDashboardController extends Controller
{
    public function index()
    {
        $urls = Url::all();
        return view('backend.dashboard.dashboard', ['urls' => $urls]);
    }


    public function shorten(Request $request)
    {
        // Generate a short URL using a hash of the original URL
        $originalUrl = $request->input('original_url');
        $shortUrl = md5($originalUrl); // You can use other hash functions like sha1 or sha256

        // Check if the short URL already exists in the database
        $existingUrl = Url::where('short_url', $shortUrl)->first();
        if ($existingUrl) {
            return view('shortened', ['url' => $existingUrl]);
        }

        $url = new Url();
        $url->original_url = $request->input('original_url');
        $url->short_url = $shortUrl;
        $url->click_count = 0;
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

    // Additional methods as needed

}
