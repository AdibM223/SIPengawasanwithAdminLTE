<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterController extends Controller
{

    //Master Control Data Registrasi Badan Usaha

    public function indexregis()
    {
    	$masterregisbu = DB::table('masterregisbu')->paginate(5);
    	return view('masterregisbu',['masterregisbu' => $masterregisbu]);
    }

	public function tambahregis()
    {
		$namapeg = DB::table('datapeg')->get();
		$masterregisbu = DB::table('masterregisbu')->latest('nomorregis')->first();
    	return view('tambahmasterregis', ['masterregisbu' => $masterregisbu, 'datapegku' => $namapeg]);
 
    }

	public function inputregis(Request $request)
	{
	$countreg = DB::table('masterregisbu')->count();

	DB::table('masterregisbu')->insert([
		'nomorregis' => $countreg+1,
		'nama_bu_regis' => $request->nama_bu_regis,
		'alamat_bu_regis' => $request->alamat_bu_regis,
		'notelp_bu_regis' => $request->notelp_bu_regis,
		'PJ_regis' => $request->PJ_regis,
		'notelp_PJ_regis' => $request->notelp_PJ_regis,
		'nama_RO_regis' => $request->namapeg,
		'jumlah_karyawan_regis' => $request->jumlah_karyawan_regis,
		'longitude_regis' => $request->longitude_regis,
		'latitude_regis' => $request->latitude_regis
	]);

	DB::table('regisbu')->insert([
		'nomorregis' => $countreg+1,
		'nama_bu_regis' => $request->nama_bu_regis,
		'jumlah_karyawan_regis' => $request->jumlah_karyawan_regis,
		'status_tahapcanvasing' => $request->status_tahapcanvasing,
		'status_tahap1' => $request->status_tahap1,
		'status_tahap2' => $request->status_tahap2,
		'status_tahap3' => $request->status_tahap3,
		'status_tahap4' => $request->status_tahap4,
		'status_tahap5' => $request->status_tahap5,
		'status_tahapupayalain' => $request->status_tahapupayalain,
		'status_kepatuhan' => $request->status_kepatuhan
	]);

	return redirect('/masterregis')->withSuccess('Berhasil menambahkan data baru!');
	}

	public function editregis( $id)
	{
	$masterregisbu = DB::table('masterregisbu')->where('nomorregis',$id)->get();
	return view('updatemasterregis',['masterregis' => $masterregisbu]);
	}

	public function updateregis(Request $request)
	{
	DB::table('masterregisbu')->where('nomorregis', $request->nomorregis)->update([
		'nama_bu_regis' => $request->nama_bu_regis,
		'alamat_bu_regis' => $request->alamat_bu_regis,
		'notelp_bu_regis' => $request->notelp_bu_regis,
		'PJ_regis' => $request->PJ_regis,
		'notelp_PJ_regis' => $request->notelp_PJ_regis,
		'nama_RO_regis' => $request->nama_RO_regis,
		'jumlah_karyawan_regis' => $request->jumlah_karyawan_regis,
		'longitude_regis' => $request->longitude_regis,
		'latitude_regis' => $request->latitude_regis
	]);
	return redirect('/masterregis')->withSuccess('Berhasil mengubah data!');
	}

	public function hapusregis($id)
	{
	DB::table('regisbu')->where('nomorregis',$id)->delete();	
	DB::table('masterregisbu')->where('nomorregis',$id)->delete();
	return redirect('/masterregis')->withSuccess('Berhasil menghapus data yang dipilih!');
	}


    //Master Control Data Badan Usaha Terdaftar

    public function indexbu()
    {
    	$masterbuterdaftar = DB::table('masterbuterdaftar')->paginate(5);
    	return view('masterbuterdaftar',['masterbuterdaftar' => $masterbuterdaftar]);
    }

	public function tambahbu()
    {
		$wil = DB::table('wilker')->get();
		$namapeg = DB::table('datapeg')->get();
    	return view('tambahmasterbu', ['wil' => $wil, 'datapegku' => $namapeg]);
 
    }

	public function inputbu(Request $request)
	{
		$wil = DB::table('wilker')->get('id');
		$masterbuterdaftar = DB::table('masterbuterdaftar')->count();
	DB::table('masterbuterdaftar')->insert([
		'kode_bu' => $request->kode_bu.$masterbuterdaftar,
		'nama_bu' => $request->nama_bu,
		'alamat_bu' => $request->alamat_bu,
		'nama_pimpinan' => $request->nama_pimpinan,
		'notelp_pimpinan' => $request->notelp_pimpinan,
		'PIC' => $request->PIC,
		'notelp_PIC' => $request->notelp_PIC,
		'nama_RO_bu' => $request->namapeg,
		'longitude_bu' => $request->longitude_bu,
		'latitude_bu' => $request->latitude_bu
	]);
	return redirect('/masterbu')->withSuccess('Berhasil menambahkan data baru!');
	}

	public function editbu( $id)
	{
	$masterbuterdaftar = DB::table('masterbuterdaftar')->where('kode_bu',$id)->get();
	return view('updatemasterbu',['masterbu' => $masterbuterdaftar]);
	}

	public function updatebu(Request $request)
	{
	DB::table('masterbuterdaftar')->where('kode_bu', $request->kode_bu,)->update([
		'nama_bu' => $request->nama_bu,
		'alamat_bu' => $request->alamat_bu,
		'nama_pimpinan' => $request->nama_pimpinan,
		'notelp_pimpinan' => $request->notelp_pimpinan,
		'PIC' => $request->PIC,
		'notelp_PIC' => $request->notelp_PIC,
		'nama_RO_bu' => $request->nama_RO_bu,
		'longitude_bu' => $request->longitude_bu,
		'latitude_bu' => $request->latitude_bu
	]);
	return redirect('/masterbu')->withSuccess('Berhasil mengubah data!');
	}

	public function hapusbu($id)
	{
	DB::table('masterbuterdaftar')->where('kode_bu',$id)->delete();
	return redirect('/masterbu')->withSuccess('Berhasil menghapus data yang dipilih!');
	}


	public function indexmapsbu($id)
	{
	$masterbuterdaftar = DB::table('masterbuterdaftar')->where('kode_bu',$id)->get();
	return view('maps',['masterbu' => $masterbuterdaftar]);
	}

	public function indexmapsregis($id)
	{
	$masterregisbu = DB::table('masterregisbu')->where('nomorregis',$id)->get();
	return view('maps',['masterregis' => $masterregisbu]);
	}


	public function cariregis(Request $request)
	{
		$cari = $request->cari;
		$regisbu = DB::table('masterregisbu')
		->where('nama_bu_regis','like',"%".$cari."%")
		->paginate();
		return view('masterregisbu',['masterregisbu' => $regisbu]);
	}

	public function caribu(Request $request)
	{
		$cari = $request->cari;
		$regisbu = DB::table('masterbuterdaftar')
		->where('nama_bu','like',"%".$cari."%")
		->paginate();
		return view('masterbuterdaftar',['masterbuterdaftar' => $regisbu]);
	}
}