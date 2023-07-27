<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class InformasiAgenController extends Controller
{
    public function index(){
        $profile__agen = DB::table('users')->get();
        return view('adminedu.info_agen.index',compact('profile__agen'));
    }

    public function destroy($id)
    {
        $profile__agen = DB::table('users')->where('id',$id)->delete();
        // return redirect('/admin_edu/detail_informasi_agen');
    }

}
