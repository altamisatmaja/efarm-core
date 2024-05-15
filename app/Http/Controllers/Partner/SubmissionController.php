<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubmissionController extends Controller
{
    public function submission()
    {  
        $provinsi = Http::get('https://ibnux.github.io/data-indonesia/provinsi.json');
        $provinsi = json_decode($provinsi);
        foreach ($provinsi as $item) {
            var_dump($item->id == 11);
        }
        // dd($provinsi->id);
        $kabupaten = Http::get('https://ibnux.github.io/data-indonesia/kabupaten/'.$provinsi.'.json');
        $kecamatan = Http::get('https://ibnux.github.io/data-indonesia/kecamatan/'.$kabupaten.'.json');
        $kecamatan = Http::get('https://ibnux.github.io/data-indonesia/kelurahan/'.$kecamatan.'.json');
        // $response = json_decode($pronvisi);
        return view('pages.partner.submission');
    }
    public function store() {}

    public function getAlamat() {}

}
