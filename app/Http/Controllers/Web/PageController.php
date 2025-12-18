<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\NewsArticle;
use App\Models\Partner;
use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::active()->take(3)->get();
        $news = NewsArticle::published()->take(3)->get();
        $team = TeamMember::mainTeam()->take(3)->get();
        $partners = Partner::active()->get();

        return view('pages.home', compact('services', 'news', 'team', 'partners'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function team()
    {
        $mainTeam = TeamMember::mainTeam()->get();
        $partnerTeam = TeamMember::partnerTeam()->get();
        return view('pages.team', compact('mainTeam', 'partnerTeam'));
    }
    public function services()
    {
        $services = Service::active()->get();
        return view('pages.services', compact('services'));
    }
    public function news()
    {
        // 3 large cards + 10 small cards = 13 per page
        $news = NewsArticle::published()->paginate(13);
        return view('pages.news', compact('news'));
    }
    public function newsPage(NewsArticle $newsArticle)
    {
        $relatedNews = NewsArticle::published()
            ->where('id', '!=', $newsArticle->id)
            ->take(3)
            ->get();
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
        return view('pages.path');
    }
    public function notFound()
    {
        return view('pages.404');
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Here you would typically save to database or send email
        // For now, we'll just return a success response

        return response()->json([
            'success' => true,
            'message' => 'Повідомлення успішно відправлено!'
        ]);
    }
}