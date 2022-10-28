<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Transaksi;

use App\Models\Penyedia;

use App\Models\Pekerjaan;

class HomeController extends Controller
{
    public function redirect(){
        //$penyedia = penyedia::all();
        $pekerjaan = pekerjaan::all();
        $penyedia = Penyedia::query()->withAvg('pekerjaans', 'nilai_total')->get();

        if(Auth::id()){
            return view('admin.panel', compact('penyedia','pekerjaan'));
        }else{
            return redirect()->back();
        }
    }

    public function index(){

        $transaksi = transaksi::all();
        $penyedia = Penyedia::query()->withAvg('pekerjaans', 'nilai_total')->get();
        $pekerjaan = pekerjaan::all();

        return view('user.home', compact('transaksi','penyedia','pekerjaan'));
    }

    /*
    public function handleChart()
    {
        $transaksi = transaksi::all();
        $penyedia = penyedia::all();
          
        return view('user.home', compact('transaksi','penyedia'));
    }
    */
}
