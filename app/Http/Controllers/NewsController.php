<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function getMovies()
    {
        // Membuat request ke API menggunakan Guzzle
        $response = Http::withHeaders([
            'x-rapidapi-host' => 'real-time-news-data.p.rapidapi.com',
            'x-rapidapi-key' => '84c1705cd8msh490902991cace07p16d696jsncb8a9f78b702',
        ])->get('https://real-time-news-data.p.rapidapi.com/top-headlines?limit=20&country=ID&lang=id');

        if ($response->successful()) {
            // Kirim data ke view
            $data = $response->json();
            $news = $data['data'];
            return view('index', ['news' => $news]);
        } else {
            // Jika terjadi error
            return view('index', ['error' => 'Error fetching data']);
        }
    }
}
