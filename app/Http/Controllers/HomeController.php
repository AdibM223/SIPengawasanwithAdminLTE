<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $count =  DB::table('ajuansertif')->count();
        $count2 =  DB::table('masterregisbu')->count();
        $count3 =  DB::table('masterbuterdaftar')->count();
        $count4 =  DB::table('regisbu')->count();

        $counttahapcanvastotal = DB::table('regisbu')->where('status_tahapcanvasing','Tidak Patuh')->orwhere('status_tahapcanvasing','Patuh')->count();
        $counttahap1total = DB::table('regisbu')->where('status_tahap1','Tidak Patuh')->orwhere('status_tahap1','Patuh')->count();
        $counttahap2total = DB::table('regisbu')->where('status_tahap2','Tidak Patuh')->orwhere('status_tahap2','Patuh')->count();
        $counttahap3total = DB::table('regisbu')->where('status_tahap3','Tidak Patuh')->orwhere('status_tahap3','Patuh')->count();
        $counttahap4total = DB::table('regisbu')->where('status_tahap4','Tidak Patuh')->orwhere('status_tahap4','Patuh')->count();
        $counttahap5total = DB::table('regisbu')->where('status_tahap5','Tidak Patuh')->orwhere('status_tahap5','Patuh')->count();
        $counttahapupayalaintotal = DB::table('regisbu')->where('status_tahapupayalain','Tidak Patuh')->orwhere('status_tahapupayalain','Patuh')->count();

        $counttahapcanvastdk = DB::table('regisbu')->where('status_tahapcanvasing','Tidak Patuh')->count();
        $counttahap1tdk = DB::table('regisbu')->where('status_tahap1','Tidak Patuh')->count();
        $counttahap2tdk = DB::table('regisbu')->where('status_tahap2','Tidak Patuh')->count();
        $counttahap3tdk = DB::table('regisbu')->where('status_tahap3','Tidak Patuh')->count();
        $counttahap4tdk = DB::table('regisbu')->where('status_tahap4','Tidak Patuh')->count();
        $counttahap5tdk = DB::table('regisbu')->where('status_tahap5','Tidak Patuh')->count();
        $counttahapupayalaintdk = DB::table('regisbu')->where('status_tahapupayalain','Tidak Patuh')->count();

        $counttahapcanvaspth = DB::table('regisbu')->where('status_tahapcanvasing','Patuh')->count();
        $counttahap1pth = DB::table('regisbu')->where('status_tahap1','Patuh')->count();
        $counttahap2pth = DB::table('regisbu')->where('status_tahap2','Patuh')->count();
        $counttahap3pth = DB::table('regisbu')->where('status_tahap3','Patuh')->count();
        $counttahap4pth = DB::table('regisbu')->where('status_tahap4','Patuh')->count();
        $counttahap5pth = DB::table('regisbu')->where('status_tahap5','Patuh')->count();
        $counttahapupayalainpth = DB::table('regisbu')->where('status_tahapupayalain','Patuh')->count();
       


        return view('dashboard',
        ['countajuan' => $count, 
        'countmasterregis' => $count2,
        'countmasterbu'=> $count3, 
        'countregis'=> $count4,

        'counttahapcanvastotal' => $counttahapcanvastotal, 
        'counttahap1total' => $counttahap1total,
        'counttahap2total'=> $counttahap2total, 
        'counttahap3total'=> $counttahap3total,
        'counttahap4total' => $counttahap4total,
        'counttahap5total'=> $counttahap5total, 
        'counttahapupayalaintotal'=> $counttahapupayalaintotal, 

        'counttahapcanvastdk' => $counttahapcanvastdk, 
        'counttahap1tdk' => $counttahap1tdk,
        'counttahap2tdk'=> $counttahap2tdk, 
        'counttahap3tdk'=> $counttahap3tdk,
        'counttahap4tdk' => $counttahap4tdk,
        'counttahap5tdk'=> $counttahap5tdk, 
        'counttahapupayalaintdk'=> $counttahapupayalaintdk, 

        'counttahapcanvaspth' => $counttahapcanvaspth, 
        'counttahap1pth' => $counttahap1pth,
        'counttahap2pth'=> $counttahap2pth, 
        'counttahap3pth'=> $counttahap3pth,
        'counttahap4pth' => $counttahap4pth,
        'counttahap5pth'=> $counttahap5pth, 
        'counttahapupayalainpth'=> $counttahapupayalainpth, 
    ]);
    }

    public function indexdsbregis1(){
        $count =  DB::table('regisbu')->where('status_tahap1' ,'!=', 'Belum Terkonfirmasi')->get();

        return view('dashboardext.dsbtahap1',
        ['userku' => $count]);
    }

    public function indexdsbregis2(){
        $count =  DB::table('regisbu')->where('status_tahap2' ,'!=', 'Belum Terkonfirmasi')->get();

        return view('dashboardext.dsbtahap2',
        ['userku' => $count]);
    }

    public function indexdsbregis3(){
        $count =  DB::table('regisbu')->where('status_tahap3' ,'!=', 'Belum Terkonfirmasi')->get();

        return view('dashboardext.dsbtahap3',
        ['userku' => $count]);
    }

    public function indexdsbregis4(){
        $count =  DB::table('regisbu')->where('status_tahap4' ,'!=', 'Belum Terkonfirmasi')->get();

        return view('dashboardext.dsbtahap4',
        ['userku' => $count]);
    }

    public function indexdsbregis5(){
        $count =  DB::table('regisbu')->where('status_tahap5' ,'!=', 'Belum Terkonfirmasi')->get();

        return view('dashboardext.dsbtahap5',
        ['userku' => $count]);
    }

    public function indexdsbregiscanvas(){
        $count =  DB::table('detailcanvasing')->get();

        return view('dashboardext.dsbtahapcanvas',
        ['userku' => $count]);
    }

    public function indexdsbregisupaya(){
        $count =  DB::table('detailupaya')->get();

        return view('dashboardext.dsbtahapupaya',
        ['userku' => $count]);
    }


}
