<?php

namespace App\Http\Controllers;

use App\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    //
    public function getIndex() {

        $memberships = Membership::get();

        return view('pages.memberships.index', [
            'memberships' => $memberships,
        ]);
    }

    public function getCreate() {

        return view('pages.memberships.edit');
    }

    public function getEdit($id) {
        return view('pages.memberships.edit', []);
    }

    public function getDetail($id) {
        // dd($id);
        return view('pages.memberships.detail', []);
    }

    public function getDelete($id) {
        dd('delete');
    }

    public function postSave(Request $r) {

        $price = number_format($r->memberships_price);

        $r->validate([
            'memberships_name' => 'required',
            'memberships_price' => 'required',
            'memberships_description' => 'required',
            'memberships_features' => 'required',
        ]);

        $data = [
            'name' => $r->memberships_name,
            'price' => $price,
            'description' => $r->memberships_description,
            'features' => $r->memberships_features,
        ];

        $membership = Membership::create($data);

        return redirect()->route('memberships.index');
    }
}
