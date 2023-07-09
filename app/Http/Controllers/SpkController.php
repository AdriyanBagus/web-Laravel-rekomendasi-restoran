<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Restoran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpkController extends Controller
{
    public function hitung(Request $request){

        $kriteria = Kriteria::sum('bobot');
        $bobotKriteriaC1 = DB::table('kriteria')->where('kode' ,'C1')->value('bobot');
        $bobotKriteriaC2 = DB::table('kriteria')->where('kode' ,'C2')->value('bobot');
        $bobotKriteriaC3 = DB::table('kriteria')->where('kode' ,'C3')->value('bobot');
        $bobotKriteriaC4 = DB::table('kriteria')->where('kode' ,'C4')->value('bobot');
        $bobotKriteriaC5 = DB::table('kriteria')->where('kode' ,'C5')->value('bobot');
 
        
        $bobot1 = $bobotKriteriaC1/$kriteria;
        $bobot2 = $bobotKriteriaC2/$kriteria;
        $bobot3 = $bobotKriteriaC3/$kriteria;
        $bobot4 = $bobotKriteriaC4/$kriteria;
        $bobot5 = $bobotKriteriaC5/$kriteria;

        // $bobot1 = 4/$kriteria;
        // $bobot2 = 5/$kriteria;
        // $bobot3 = 4/$kriteria;
        // $bobot4 = 4/$kriteria;
        // $bobot5 = 3/$kriteria;
        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];
        $widget5 = [
            'kriterias' => $bobot5,
        ];


        $produk = Restoran::get();
        $data = Restoran::orderby('nama', 'asc')->get();

        $minC1 = Restoran::min('Harga');
        $maxC1 = Restoran::max('Harga');
        $minC2 = Restoran::min('Lokasi');
        $maxC2 = Restoran::max('Lokasi');
        $minC3 = Restoran::min('Menu');
        $maxC3 = Restoran::max('Menu');
        $minC4 = Restoran::min('Pelayanan');
        $maxC4 = Restoran::max('Pelayanan');
        $minC5 = Restoran::min('Jarak');
        $maxC5 = Restoran::max('Jarak');

        $C1min =[
            'restorans' => $minC1,
        ];
        $C1max =[
            'restorans' => $maxC1,
        ];
        $C2min =[
            'restorans' => $minC2,
        ];
        $C2max =[
            'restorans' => $maxC2,
        ];
        $C3min =[
            'restorans' => $minC3,
        ];
        $C3max =[
            'restorans' => $maxC3,
        ];
        $C4min =[
            'restorans' => $minC4,
        ];
        $C4max =[
            'restorans' => $maxC4,
        ];
        $C5min =[
            'restorans' => $minC5,
        ];
        $C5max =[
            'restorans' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'restorans' => $hasil,
        ];

        return view('/hitung', ['title' => "Perhitungan"],compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'));

    }
}
