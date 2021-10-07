<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PhoneBanking extends Controller
{
    public function index($nik, $fullName, $fak, $prodi) {
        return response()->json([
                'message' => 'Selamat, pembayaran Anda atas nama ' . $fullName . ' dari Fakultas ' . $fak . ' Program Studi ' . $prodi . ' telah selesai!'
        ]);
    }
}