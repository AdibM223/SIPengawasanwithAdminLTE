<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class AdministratorController extends Controller
{


// ==============================================================================================================
//                                          ADMINISTRASI USER
// ==============================================================================================================

    public function indexuser()
    {
    	$userku = DB::table('users')->where('role','=','Guest')->get();
    	return view('administrator.useradminis',['userku' => $userku]);
    }

    public function register()
    {
        return view('administrator.tambahuseradminis');
    }
    
    public function actionregister(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'name' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'active' => 1
        ]);

        
        return redirect('/useradmin')->withSuccess('Berhasil menambahkan Akun baru!');
    }

    public function registerupdate($id)
    {
        $userku = DB::table('users')->where('id',$id)->get();
     	return view('administrator.updateuseradminis',['userku' => $userku]);
    }
    
    public function actionregisterupdate(Request $request)
    {
        $user = DB::table('users')->where('id', $request->id)->update([
            'name' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/useradmin')->withSuccess('Berhasil mengubah data akun!');
    }


    public function registerdelete($id)
	{
	DB::table('users')->where('id',$id)->delete();	
	return redirect('/useradmin')->withSuccess('Berhasil Menghapus data akun yang dipilih!');
	}




    public function regispreload()
    {
        return view('preload.firstentry');
    }
    
    public function actionregispreload(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'name' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'active' => 1
        ]);
        return redirect('/preload')->withSuccess('Berhasil menambahkan akun administrator baru!');
    }



// ==============================================================================================================
//                                         PEGAWAI
// ==============================================================================================================

public function indexdatapeg()
    {
    	$datapegku = DB::table('datapeg')->get();
    	return view('administrator.dataRO.datapeg',['datapegku' => $datapegku]);
    }

public function adddatapeg()
    {
        return view('administrator.dataRO.tambahdatapeg');
    }
    
    public function actiondatapeg(Request $request)
    {
        $wilkerku = DB::table('datapeg')->insert([
            'nip' => $request->nip,
            'namapeg' => $request->nampeg,
            'kontak' => $request->kontak,
        ]);

        return redirect('/datapeg')->withSuccess('Berhasil menambahkan data RO baru!');
    }

    public function datapegupdate($id)
    {
        $datapegku = DB::table('datapeg')->where('id',$id)->get();
     	return view('administrator.dataRO.updatedatapeg',['datapegku' => $datapegku]);
    }
    
    public function actiondatapegupdate(Request $request)
    {
        $user = DB::table('datapeg')->where('id', $request->id)->update([
            'nip' => $request->nip,
            'namapeg' => $request->nampeg,
            'kontak' => $request->kontak,
        ]);

        return redirect('/datapeg')->withSuccess('Berhasil mengubah data RO!');
    }


    public function datapegdelete($id)
	{
	DB::table('datapeg')->where('id',$id)->delete();	
	return redirect('/datapeg')->withSuccess('Berhasil menghapus data RO yang dipilih!');
    
	}

// ==============================================================================================================
//                                         WILAYAH KERJA
// ==============================================================================================================

 public function indexwilker()
    {
    	$wilkerku = DB::table('wilker')->get();
    	return view('administrator.Wilker.wilker',['wilkerku' => $wilkerku]);
    }

public function addwilker()
    {
        return view('administrator.Wilker.tambahwilker');
    }
    
    public function actionwilker(Request $request)
    {
        $wilkerku = DB::table('wilker')->insert([
            'namawil' => $request->username,
        ]);

        return redirect('/wilker')->withSuccess('Berhasil menambahkan wilayah baru!');
    }

    public function wilkerupdate($id)
    {
        $wilkerku = DB::table('wilker')->where('id',$id)->get();
     	return view('administrator.Wilker.updatewilker',['wilkerku' => $wilkerku]);
    }
    
    public function actionwilkerupdate(Request $request)
    {
        $user = DB::table('wilker')->where('id', $request->id)->update([
            'namawil' => $request->username,
        ]);

        return redirect('/wilker')->withSuccess('Berhasil Mengubah data wilayah!');
    }


    public function wilkerdelete($id)
	{
	DB::table('wilker')->where('id',$id)->delete();	
	return redirect('/wilker')->withSuccess('Berhasil Menghapus wilayah!');
	}
}
