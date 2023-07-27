<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\Agen;
use Illuminate\Support\Facades\Auth;

class ProfileAgenController extends Controller
{

    public function index(){
        $profile__agen = Agen::get();
        return view('agen.profile.index',compact('profile__agen'));
        
        // $profile__agen = Agen::where('id', Auth::user()->id)->get();
        //     // ->join('stores', 'users.id', '=', 'stores.user_id')
        //     // ->select('stores.name AS store', 'stores.image AS image', 'stores.location AS location', 'stores.desc AS desc', 'stores.id AS id', 'stores.banner AS banner')->get();
        // // return view('admin_toko.profile.editprofiletoko', compact('stores'));
        // return view('agen.profile.create', compact('profile__agen'));
    }


    public function create(){
        $profile__agen = Agen::get();
        return view('agen.profile.create',compact('profile__agen'));

        // $profile__agen = DB::table('profile__agen')->get();
        // return view('agen.profile.create',compact('profile__agen'));

        // $profile__agen = Agen::where('users.id', Auth::user()->id)->get();
        //     // ->join('stores', 'users.id', '=', 'stores.user_id')
        //     // ->select('stores.name AS store', 'stores.image AS image', 'stores.location AS location', 'stores.desc AS desc', 'stores.id AS id', 'stores.banner AS banner')->get();
        // return view('admin_toko.profile.editprofiletoko', compact('stores'));
        // return view('agen.profile.create', compact('profile__agen'));
    }

    public function store(Request $request){
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'NIK' => 'required',
        //     'date_of_birth' => 'required',
        //     'no_rek' => 'required',
        //     'phone_number' => 'required',
        //     'catatan' => 'required',
        //     'address' => 'required',
        //     'role' => 'required',
        // ]);
        // DB::table('profile__agen')->insert([
        //     'first_name' => $request['first_name'],
        //     'last_name' => $request['last_name'],
        //     'NIK' => $request['NIK'],
        //     'date_of_birth' => $request['date_of_birth'],
        //     'no_rek' => $request['no_rek'],
        //     'phone_number' => $request['phone_number'],
        //     'catatan' => $request['catatan'],
        //     'address' => $request['address'],
        //     'role' => $request['role'],
        // ]);
        // return redirect('/agen/profile');
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'NIK' => 'required',
            'date_of_birth' => 'required',
            'no_rek' => 'required',
            'phone_number' => 'required',
            'alamat' => 'required',
            'address' => 'required',
            'role' => 'required',
        ]);

        $profile__agen = new Agen;

        $profile__agen->first_name = $request->first_name;
        $profile__agen->last_name = $request->last_name;
        $profile__agen->NIK = $request->NIK;
        $profile__agen->date_of_birth = $request->date_of_birth;
        $profile__agen->no_rek = $request->no_rek;
        $profile__agen->phone_number = $request->phone_number;
        $profile__agen->alamat = $request->alamat;
        $profile__agen->address = $request->address;
        $profile__agen->role = $request->role;

        $profile__agen->save();

        //Alert::success('Berhasil !', 'Tambah Data Film Berhasil');
        return redirect('/agen/profile');
    }

    public function show($id){
        // $profile__agen = DB::table('profile__agen')->where('id',$id)->first();
        // return view('agen.profile.index',compact('profile__agen'));
        $profile__agen = Agen::findOrFail($id);
        return view('agen.profile.index',compact('profile__agen'));
    }

    public function edit($id){
        // $user = DB::table('user')->get();
        // $profile__agen = Agen::findOrFail($id);

        // return view('agen.profile.edit',compact('profile__agen','user'));
    }

    public function update($id, Request $request){
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'NIK' => 'required',
        //     'date_of_birth' => 'required',
        //     'no_rek' => 'required',
        //     'phone_number' => 'required',
        //     'catatan' => 'required',
        //     'address' => 'required',
        //     'role' => 'required',
        // ]);

        // $profile__agen = Agen::find($id);

        // $profile__agen->first_name = $request->first_name;
        // $profile__agen->last_name = $request->last_name;
        // $profile__agen->NIK = $request->NIK;
        // $profile__agen->date_of_birth = $request->date_of_birth;
        // $profile__agen->no_rek = $request->no_rek;
        // $profile__agen->phone_number = $request->phone_number;
        // $profile__agen->alamat = $request->alamat;
        // $profile__agen->address = $request->address;
        // $profile__agen->role = $request->role;

        // $profile__agen->update();
        // // $profile__agen->save();
        // return redirect('/agen/profile');
    }
}
