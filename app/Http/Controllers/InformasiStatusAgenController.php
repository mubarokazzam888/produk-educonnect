<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiStatusAgenController extends Controller
{
    public function index(){
        return view("adminedu.edit");
    }

    public function edit(){
        // $user = DB::table('user')->get();
        // return view('agen.create',compact('user'));
        return view("adminedu.edit");
    }

    public function show(){
        // $pelatihan = Pelatihan::findOrFail($id);

        // return view('pelatihan.show',compact('pelatihan'));
    }

    public function update(){
        // $request->validate([
        //     'senam_sederhana' => 'required',
        //     'video_senam' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        //     'user_id' => 'required',
        // ]);
    
        // $pelatihan = Pelatihan::find($id);
    
        // if($request->has('video_senam')){
        //     $video_senamName = time().'.'.$request->video_senam->extension();
        //     $request->video_senam->move(public_path('gambar'),$video_senamName);
    
        //     $pelatihan->senam_sederhana = $request->senam_sederhana;
        //     $pelatihan->video_senam = $video_senamName;
        //     $pelatihan->user_id = $request->user_id;
    
        // }else{
        //     $pelatihan->senam_sederhana = $request->senam_sederhana;
        //     $pelatihan->user_id = $request->user_id;
        // }
    
        // $pelatihan->update();
        // //Alert::success('Update','Data Film Berhasil Diupdate !');
        // return redirect('/pelatihan');
    }
}
