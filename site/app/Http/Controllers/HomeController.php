<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getIndex() {
        return view('pages.welcome');
    }

    public function getAbout() {
        dd('about');
    }

    public function getPrivacyPolicy() {
        dd('privacy policy');
    }

    public function getMail(Request $r) {
        dd($r);
    }
}
