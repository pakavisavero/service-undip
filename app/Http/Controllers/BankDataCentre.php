<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BankDataCentre extends Controller
{
    public function index($virtual_number, $nik) {
        $data = [
            [
                'virtual_number' => 1,
                'nik' => '3275932032',
                'fullName' => "Savero Pakavi Z",
                'desc' => 'Universitas Diponegoro'
            ],
            [
                'virtual_number' => 2,
                'nik' => '452391213',
                'fullName' => "Zulkarnaen Waluyo",
                'desc' => 'Universitas Indonesia'

            ],
            [
                'virtual_number' => 3,
                'nik' => '64232321',
                'fullName' => "Bernand Craig",
                'desc' => 'Institut Teknologi Bandung'

            ],
        ];

        foreach ($data as $dt) {
            if($dt['virtual_number'] == $virtual_number && $dt['nik'] == $nik) {
                return Redirect::route('university', [
                    'virtual_number' => $dt->virtual_number,
                    'nik' => $dt->nik,
                ]);
            }
        }
    }
}