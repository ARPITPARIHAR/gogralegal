<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
class PageController extends Controller
{
    public function home(Request $request){
        return view('frontend.home');
    }
    public function contact_us(Request $request){
        return view('frontend.contact');
    }
    public function about_us(Request $request,$slug){
        $page = Page::where('slug',$slug)->first();
        return view('frontend.page',compact('page'));
    }
    public function practice_area(Request $request,$slug){
        $page = Page::where('slug',$slug)->first();
        return view('frontend.page',compact('page'));
    }
    public function practice_areas(Request $request){
        return view('frontend.practice-areas');
    }
    public function team(Request $request){
        return view('frontend.team');
    }
    public function login_register(Request $request){
        return view('frontend.login-register');
    }
}
