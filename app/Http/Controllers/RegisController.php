<?php


namespace App\Http\Controllers;

use App\Exports\RegisExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;
class RegisController extends Controller
{
    public function indexregis()
    {
    	$regisbu = DB::table('regisbu')->paginate(5);
		$diff = DB::table('regisbu')->get('tgl_suratpernyataan');
    	return view('regisbu',['regisbu' => $regisbu, 'date' => $diff]);
    }

    public function indexupaya($id)
    {
    	$detailupaya = DB::table('detailupaya')->where('nomorregis',$id)->get();
		$regiscanvas = DB::table('masterregisbu')->where('nomorregis',$id)->get();
    	return view('regisupayalain',['upayalain' => $detailupaya,'noregis'=>$regiscanvas]);
    }

    public function indexcanvasing($id)
    {
    	$detailcanvasing = DB::table('detailcanvasing')->where('nomorregis',$id)->get();
		$regiscanvas = DB::table('masterregisbu')->where('nomorregis',$id)->get();
    	return view('regiscanvasing',['canvas' => $detailcanvasing,'noregis'=>$regiscanvas]);
    }






	public function tambahregis()
    {
		$masterregisbu = DB::table('masterregisbu')->get();
    	return view('tambahregisbu',['mstrregis' => $masterregisbu]);
 
    }

	public function tambahcanvasing($id)
    {

	$regiscanvas = DB::table('masterregisbu')->where('nomorregis',$id)->get();
	return view('tambahcanvasing',['regiscanvas' => $regiscanvas]);
 
    }

	public function tambahupaya($id)
    {
	
	$regisupaya = DB::table('masterregisbu')->where('nomorregis',$id)->get();
	return view('tambahupayalain',['regisupaya' => $regisupaya]);
 
    }
	

	public function inputcanvasing(Request $request)
	{
	DB::table('detailcanvasing')->insert([
		'nomorregis' => $request->nomorregis,
		'metode_canvasing' => $request->metode_canvasing,
		'tanggal_canvasing' => $request->tanggal_canvasing,
		'hasil_canvasing' => $request->hasil_canvasing,
		'jumlah_potensi_pekerja' => $request->jumlah_potensi_pekerja,
		'jumlah_potensi_keluarga' => $request->jumlah_potensi_keluarga,
		'tindak_lanjut' => $request->tindak_lanjut,
		'hasil_rekrutmen' => $request->hasil_rekrutmen,
		
	]);

	DB::table('regisbu')->where('nomorregis',$request->nomorregis)->update([
		'status_tahapcanvasing' => $request->statuscanvas,
		'status_kepatuhan' => $request->statuskepatuhan
	]);
	return redirect('/regisbu');
	}

	public function inputupayalain(Request $request)
	{
	DB::table('detailupaya')->insert([
		'nomorregis' => $request->nomorregis,
		'tgl_upayalain' => $request->tgl_upayalain,
		'kegiatan_upayalain' => $request->kegiatan_upayalain,
		'hasil_upayalain' => $request->hasil_upayalain,
	]);

	DB::table('regisbu')->where('nomorregis',$request->nomorregis)->update([
		'status_kepatuhan' => $request->hasil_upayalain,
	]);
	return redirect('/regisbu');
	}


	public function hapuscanvasing( $id)
	{
	DB::table('detailcanvasing')->where('nomorregis',$id)->delete();
	DB::table('regisbu')->where('nomorregis',$id)->update([
		'status_tahapcanvasing' => 'Belum Terkonfirmasi',
		'status_tahap1' => 'Belum Terkonfirmasi',
		'status_tahap2' => 'Belum Terkonfirmasi',
		'status_tahap3' => 'Belum Terkonfirmasi',
		'status_tahap4' => 'Belum Terkonfirmasi',
		'status_tahap5' => 'Belum Terkonfirmasi',
		'status_tahapupayalain' => 'Belum Terkonfirmasi',
		'status_kepatuhan' => 'Belum Terkonfirmasi']);
	return redirect('/regisbu');
	}

	public function hapusupayalain($id)
	{
	DB::table('detailupaya')->where('nomorregis',$id)->delete();
	return redirect('/regisbu');
	}

	public function registahap1( $id)
	{
	$regisbu = DB::table('regisbu')->where('nomorregis',$id)->get();
	return view('tahap1',['regisbu' => $regisbu ]);
	}

	public function registahap2( $id)
	{

	$regisbu = DB::table('selisihtahap2')->where('nomorregis',$id)->get();
	
	return view('tahap2',['regisbu' => $regisbu]);
	}

	public function registahap3( $id)
	{
	$regisbu = DB::table('regisbu')->where('nomorregis',$id)->get();
	return view('tahap3',['regisbu' => $regisbu]);
	}

	public function registahap4( $id)
	{
	$regisbu = DB::table('regisbu')->where('nomorregis',$id)->get();
	return view('tahap4',['regisbu' => $regisbu]);
	}

	public function registahap5( $id)
	{
	$regisbu = DB::table('regisbu')->where('nomorregis',$id)->get();
	return view('tahap5',['regisbu' => $regisbu]);
	}


	public function updatetahap1(Request $request)
	{
		$file = $request->file('dokumen_pendukung');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$file->storeAs('public/regis/files', $fileName);
	DB::table('regisbu')->where('nomorregis',$request->nomorregis)->update([
		'tgl_suratpernyataan' => $request->tgl_suratpernyataan,
		'dokumen_pendukung' => $fileName,
		'status_tahap1' => $request->status_tahap1,
			'status_kepatuhan' => $request->kepatuhanku,
	]);
	return redirect('/regisbu');
	}

	public function updatetahap2(Request $request)
	{
	DB::table('regisbu')->where('nomorregis',$request->nomorregis)->update([
		'tgl_pemeriksaan' => $request->tgl_pemeriksaan,
		'nama_pemeriksa' => $request->nama_pemeriksa,
		'hasil_pemeriksaan' => $request->hasil_pemeriksaan,
		'tgl_SPHP' => $request->tgl_SPHP,
		'status_tahap2' => $request->status_tahap2,
		'status_kepatuhan' => $request->kepatuhanku,
	]);
	return redirect('/regisbu');
	}

	public function updatetahap3(Request $request)
	{
	DB::table('regisbu')->where('nomorregis',$request->nomorregis)->update([
		'tgl_surat_teguranI' => $request->tgl_surat_teguranI,
		'status_tahap3' => $request->status_tahap3,
		'status_kepatuhan' => $request->kepatuhanku,
	]);
	return redirect('/regisbu');
	}

	public function updatetahap4(Request $request)
	{
	DB::table('regisbu')->where('nomorregis',$request->nomorregis)->update([
		'tgl_surat_teguranII' => $request->tgl_surat_teguranII,
		'status_tahap4' => $request->status_tahap4,
		'status_kepatuhan' => $request->kepatuhanku,
	]);
	return redirect('/regisbu');
	}

	public function updatetahap5(Request $request)
	{
	DB::table('regisbu')->where('nomorregis',$request->nomorregis)->update([
		'tgl_sanksi_administratif' => $request->tgl_sanksi_administratif,
		'status_tahap5' => $request->status_tahap5,
		'status_kepatuhan' => $request->kepatuhanku,
	]);
	return redirect('/regisbu');
	}


	public function export_excel()
	{
		return Excel::download(new RegisExport, 'registrasiBU_BPJS.xlsx');
	}
}

