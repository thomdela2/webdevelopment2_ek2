<?php

namespace App\Http\Controllers;

use App\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mollie\Laravel\Facades\Mollie;

class MembershipController extends Controller
{
    //

    public function getSucces() {
        return redirect()->route('memberships.index');
    }

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


    public function makePayement($id) {

        $value = Membership::where('id', $id)->first()->price;

        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $value, // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "API payement from Laravel",
            "redirectUrl" => route('memberships.success'),
            "webhookUrl" => 'https://be615aef9727.ngrok.io/webhooks/mollie',
            "metadata" => [
                "order_id" => "12345",
            ],
        ]);

        $payment = Mollie::api()->payments->get($payment->id);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }
}
