<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class AdministratorController extends Controller
{
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

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('/useradmin');
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

        return redirect('/useradmin');
    }


    public function registerdelete($id)
	{
	DB::table('users')->where('id',$id)->delete();	
	return redirect('/useradmin');
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

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('/preload');
    }

}
