<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PaymentGateway extends Controller
{
    public function index($nik, $fak, $prodi) {
        $data = [
            [
                'nik' => '3275932032',
                'fullName' => "Savero Pakavi Z",
            ],
            [
                'nik' => '452391213',
                'fullName' => "Zulkarnaen Waluyo",

            ],
            [
                'nik' => '64232321',
                'fullName' => "Bernand Craig",
            ],
        ];

        foreach ($data as $dt) {
            if($dt['nik'] == $nik) {
                return Redirect::route('phone-banking', [
                    'nik' => $dt['nik'],
                    'fullName' => $dt['fullName'],
                    'fak' => $fak,
                    'prodi' => $prodi,
                ]);
            }
        }
    }
}