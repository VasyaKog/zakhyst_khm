<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()     { return view('pages.home'); }
    public function about()   { return view('pages.about'); }
    public function services() { return view('pages.services'); }
    public function contact() { return view('pages.contact'); }
}