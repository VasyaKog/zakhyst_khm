<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() { return view('pages.home'); }
    public function about() { return view('pages.about'); }
    public function team() { return view('pages.team'); }
    public function services() { return view('pages.services'); }
    public function news() { return view('pages.news'); }
    public function newsPage() { return view('pages.news-page'); }
    public function contact() { return view('pages.contact'); }
    public function indifferent() { return view('pages.indifferent'); }
    public function path() { return view('pages.path'); }
     
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