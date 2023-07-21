<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ajuansertif;

class SertifController extends Controller
{
    public function indexajuan()
    {
    	$ajuansertif = DB::table('ajuansertif')->paginate(5);
    	return view('ajuansertif',['ajuansertif' => $ajuansertif]);
    }

	public function tambahajuan()
    {
		$masterbu = DB::table('masterbuterdaftar')->get();
    	return view('tambahajuan',['mstrbu' => $masterbu]);
 
    }

	public function penyerahan($id)
    {
		$ajuansertif = DB::table('ajuansertif')->where('kode_bu',$id)->get();
		$masterbu = DB::table('masterbuterdaftar')->where('kode_bu',$id)->get();
    	return view('penyerahan',['ajuansertif' => $ajuansertif,'mstrbu' => $masterbu]);
 
    }

	public function inputajuan(Request $request)
	{
		$file = $request->file('nama_file');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$file->storeAs('public/ajuansertif/files', $fileName);

	DB::table('ajuansertif')->insert([
		'kode_bu' => $request->kode_bu,
		'no_surat' => $request->no_surat,
		'tgl_surat' => $request->tgl_surat,
		'nama_file' => $fileName
	]);

	return redirect('/ajuansertif')->withSuccess('Berhasil menambahkan data pengajuan baru!');
	}

	public function editajuan( $id)
	{
	$ajuansertif = DB::table('ajuansertif')->where('kode_bu',$id)->get();
	return view('updateajuan',['ajuansertif' => $ajuansertif]);
	}

	public function updateajuan(Request $request)
	{
	DB::table('ajuansertif')->where('kode_bu',$request->kode_bu)->update([
		'nomor_sertif' => $request->nomor_sertif,
		'tgl_cetak' => $request->tgl_cetak,
		'periode_sertif' => $request->periode_sertif,
		'jumlah_peserta' => $request->jumlah_peserta,
		'jumlah_ISAT' => $request->jumlah_ISAT,
		'tanggal_diserahkan' => $request->tanggal_diserahkan,
	]);
	return redirect('/ajuansertif')->withSuccess('Berhasil memverifikasi data!');
	}

	public function deleteajuan($id)
	{
	DB::table('ajuansertif')->where('kode_bu',$id)->delete();
	return redirect('/ajuansertif')->withSuccess('Berhasil menghapus data yang dipilih!');
	}


	public function cetaktandaterima($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
	$ajuansertif = Ajuansertif::all()->where('kode_bu',$id);
	$masterbuterdaftar = DB::table('masterbuterdaftar')->where('kode_bu',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('cetaktandaterima',['dataajuan' => $ajuansertif, 'namabadanusaha' =>$masterbuterdaftar]);
	}

}
