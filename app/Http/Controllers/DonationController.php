<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function store(Request $request) {
        Donation::create([
            "firstname" => $request->payer['name']['given_name'],
            "lastname" => $request->payer['name']['surname'] ,
            "email" => $request -> payer['email_address'],
            "country_code" => $request -> payer['address']['country_code'],
            "amount" => $request->purchase_units[0]['amount']['value'],
            "currency_code" => $request->purchase_units[0]['amount']['currency_code']

        ]);

        return response()->json([
            "success" => "Transaction completed"
        ],200);
    }

    public function get() {
        return response()->json(
            Donation::latest()->take(5)->get()
        );
    }
}
