<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PaymentChannels extends Controller
{
    public function index(Request $request) {

        if (!isset($request->virtual_number)){
            return 'Please provide a virtual number!';
        }
        
        if (!isset($request->nik)){
            return 'Please provide a NIK!';
        }
        
        return Redirect::route('bank-data', [
            'virtual_number' => $request->virtual_number,
            'nik' => $request->nik,
        ]);
    }
}