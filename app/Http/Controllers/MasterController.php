<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

class MasterController extends Controller
{
    public function Beranda() {
        $Data = DB::table('pemilihan')->where('status', 'Dibuka')->get();
        $Data2 = DB::table('kandidat')->get();
        return view('Front.Beranda', compact('Data', 'Data2'));
    }
    public function DataPemilih() {
        $Data = DB::table('pemilih')->where('status', 'Aktif')->get();
        return view('Front.DataPemilih', compact('Data'));
    }
    public function Login() {
        return view('Login');
    }
    public function AuthLogin() {
    }
    public function Logout() {
    }
}
