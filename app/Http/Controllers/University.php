<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
    
class University extends Controller
{
    public function index($id_kampus, $nik) {
        $data = [
            [
                'id_kampus' => 1,
                'nim' => '21060119140147',
                'nik' => '3275932032',
                'fullName' => "Savero Pakavi Z",
                'Year' => 2001,
                'Fakultas' => 'Teknik',
                'Jurusan' => 'Teknik Elektro'
            ],
            [
                'id_kampus' => 1,
                'nim' => '21060119120007',
                'nik' => '452391213',
                'fullName' => "Zulkarnaen Waluyo",
                'Year' => 2003,
                'Fakultas' => 'Psikologi',
                'Jurusan' => 'Psikologi'
            ],
            [
                'id_kampus' => 2,
                'nim' => '21060119130047',
                'nik' => '64232321',
                'fullName' => "Bernand Craig",
                'Year' => 2000,
                'Fakultas' => 'Perikanan dan Ilmu Kelautan',
                'Jurusan' => 'Akuakultur'
            ],
        ];

        foreach ($data as $dt) {
            if($dt['id_kampus'] == $id_kampus && $dt['nik'] == $nik) {
                return Redirect::route('payment-gateway', [
                    'nik' => $dt['nik'],
                    'fak' => $dt['Fakultas'],
                    'prodi' => $dt['Jurusan'],
                ]);
            }
        }

        return 'No Data Provided!';
    }
}