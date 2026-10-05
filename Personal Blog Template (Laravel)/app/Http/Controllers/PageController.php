<?php

namespace App\Http\Controllers;

class PageController extends Controller {

    public function home() {
        return view('pages.home');
    }
    public function about() {
        return view('pages.about');
    }
    public function category() {
        return view('pages.category');
    }
    public function contact() {
        return view('pages.contact');
    }
}
