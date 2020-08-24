<?php

namespace App\Http\Controllers;

use App\Membership;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
        return view('home');
    }

    public function getIndex() {

        $memberships = Membership::get();

        return view('pages.welcome', [
            'memberships' => $memberships,
        ]);
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
