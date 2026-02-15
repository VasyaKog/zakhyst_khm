<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\HeroBanner;
use App\Models\NewsArticle;
use App\Models\Partner;
use App\Models\PathDocument;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\TimelineEvent;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{
    public function home()
    {
        $data = Cache::remember('home_data_' . app()->getLocale(), 900, function () {
            return [
                'heroBanners' => HeroBanner::active()->get(),
                'services' => Service::active()->take(3)->get(),
                'news' => NewsArticle::published()->take(3)->get(),
                'team' => TeamMember::mainTeam()->take(3)->get(),
                'partners' => Partner::active()->get(),
            ];
        });

        return view('pages.home', $data);
    }
    public function about()
    {
        $timelineEvents = Cache::remember('timeline_events_' . app()->getLocale(), 3600, function () {
            return TimelineEvent::active()->get();
        });

        return view('pages.about', compact('timelineEvents'));
    }
    public function team()
    {
        $data = Cache::remember('team_data_' . app()->getLocale(), 3600, function () {
            return [
                'mainTeam' => TeamMember::mainTeam()->get(),
                'partnerTeam' => TeamMember::partnerTeam()->get(),
            ];
        });
        return view('pages.team', $data);
    }
    public function services()
    {
        $services = Cache::remember('services_list_' . app()->getLocale(), 3600, function () {
            return Service::active()->get();
        });
        return view('pages.services', compact('services'));
    }
    public function news()
    {
        // Pagination is hard to cache effectively, keeping dynamic
        // 3 large cards + 10 small cards = 13 per page
        $news = NewsArticle::published()->paginate(13);
        return view('pages.news', compact('news'));
    }
    public function newsPage(NewsArticle $newsArticle)
    {
        $relatedNews = Cache::remember('related_news_' . $newsArticle->id . '_' . app()->getLocale(), 1800, function () use ($newsArticle) {
            return NewsArticle::published()
                ->where('id', '!=', $newsArticle->id)
                ->take(3)
                ->get();
        });
        return view('pages.news-page', compact('newsArticle', 'relatedNews'));
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function indifferent()
    {
        return view('pages.indifferent');
    }
    public function path()
    {
        $documents = Cache::remember('path_documents_' . app()->getLocale(), 3600, function () {
            return PathDocument::active()->get();
        });

        return view('pages.path', compact('documents'));
    }
    public function notFound()
    {
        return view('errors.404');
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'nullable|string|max:255',
            'contact' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        \App\Models\ContactMessage::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Повідомлення успішно відправлено!'
        ]);
    }
}