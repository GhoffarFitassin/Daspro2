<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class IndoregionController extends Controller
{
    public function getkabupaten(Request $req)
    {
        $id_provinsi = $req->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        foreach ($kabupatens as $kabupaten) {
            echo "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
    }

    public function getkecamatan(Request $req)
    {
        $id_kabupaten = $req->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        foreach ($kecamatans as $kecamatan) {
            echo "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
    }

    public function getdesa(Request $req)
    {
        $id_kecamatan = $req->id_kecamatan;

        $desas = Village::where('district_id', $id_kecamatan)->get();

        foreach ($desas as $desa) {
            echo "<option value='$desa->id'>$desa->name</option>";
        }
    }
}
