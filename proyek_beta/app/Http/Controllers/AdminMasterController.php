<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use App\Models\Penjual;
use App\Models\Promo;
use App\Models\Report;
use App\Models\Tiket;
use Illuminate\Http\Request;

class AdminMasterController extends Controller
{
    //
    public function showMasterPenjual(){
        $penjual = Penjual::all();
        return view('masterPenjual',[
            "title" => "Master Penjual",
            "daftarPenjual" => $penjual
        ]);
    }


    public function showMasterPembeli(){
        $pembeli = Pembeli::all();
        return view('masterPembeli',[
            "title" => "Master Pembeli",
            "daftarPembeli" => $pembeli
        ]);
    }

    public function showMasterTiket(){
        $tiket = Tiket::with(['penjual'])->get();
        // $tiket = Tiket::all();
        // $tiket->load('penjual:name');
        return view('masterTiket',[
            "title" => "Master Tiket",
            "daftarTiket" => $tiket
        ]);
    }

    public function showMasterPromo(){
        $promo = Promo::with(['penjual'])->get();
        // $tiket = Tiket::all();
        // $tiket->load('penjual:name');
        return view('masterPromo',[
            "title" => "Master Promo",
            "daftarPromo" => $promo
        ]);
    }

    public function showMasterAktivitas(){
        $aktivitas = Report::with(['penjual', "pembeli"])->get();
        // $tiket = Tiket::all();
        // $tiket->load('penjual:name');
        return view('masterAktivitas',[
            "title" => "Master Aktivitas",
            "daftarAktivitas" => $aktivitas
        ]);
    }

}