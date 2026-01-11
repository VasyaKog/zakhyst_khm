<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\NewsArticle;
use App\Models\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        if (!$query || strlen($query) < 2) {
            return response()->json([
                'news' => [],
                'services' => []
            ]);
        }

        // Search News
        $news = NewsArticle::published()
            ->where(function ($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                    ->orWhere('summary', 'like', "%{$query}%");
            })
            ->take(3)
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'summary' => str()->limit($item->summary, 60),
                    'url' => route('news.show', $item),
                    'date' => $item->published_at->format('d.m.Y'),
                ];
            });

        // Search Services
        $services = Service::active()
            ->where(function ($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                    ->orWhere('left_content', 'like', "%{$query}%")
                    ->orWhere('right_content', 'like', "%{$query}%");
            })
            ->take(3)
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'url' => route('services'),
                ];
            });

        return response()->json([
            'news' => $news,
            'services' => $services
        ]);
    }
}
