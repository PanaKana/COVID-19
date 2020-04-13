<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\ImageModel;
use Carbon\Carbon;
use File;
use Image;

class DataController extends Controller
{
    public function index(){
        $datajson = 'https://api.kawalcorona.com/indonesia';
        $dataprovjson = 'https://api.kawalcorona.com/indonesia/provinsi/';
        $dataprov = json_decode(file_get_contents($dataprovjson), true);
        $data = json_decode(file_get_contents($datajson), true);
        $jumlah = $data[0]['sembuh'] + $data[0]['meninggal'] + str_replace(',','',$data[0]['positif']);
        // dd($dataprov[2]);
        return view('index', compact('data', 'jumlah', 'dataprov'));
    }
}