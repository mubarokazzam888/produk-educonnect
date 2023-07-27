<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InformasiActionController extends Controller
{
    public function index(){
        $profile__agen = DB::table('profile__agen')->get();
        return view('adminedu.info_agen.index',compact('profile__agen'));
    }

    public function show(){
        // $pelatihan = Pelatihan::findOrFail($id);

        // return view('pelatihan.show',compact('pelatihan'));
    }

    public function destroy($id)
    {
        DB::table('profile__agen')->where('id',$id)->delete();
        return redirect('/admin_edu/detail_informasi_agen');
    }
}
