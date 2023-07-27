<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HalamanUtamaController extends Controller
{
    public function index(){
        if (Auth::user()->hasRole('adminedu')) {
            return view('adminedu.hal');

        }elseif (Auth::user()->hasRole('agen')) {
            return view('agen.hal');
        }else{
            return view('calonmhs.hal');
        }
    }
}
