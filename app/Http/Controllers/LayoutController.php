<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Anak;
use App\Models\NaikBerkala;
use App\Models\NaikPangkat;
use App\Models\nonPegawai;
use App\Models\Pesan;
use App\Models\SuamiIstri;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    public function index()
    {
        $jumlah_user = User::all()->count();
        $jumlah_np = NaikPangkat::all()->count();
        $jumlah_nb = NaikBerkala::all()->count();
        $jumlah_pegawai = Pegawai::all()->count();
        $jumlah_anak = Anak::all()->count();
        $jumlah_istri = SuamiIstri::where('status', 'Istri')->count();
        $jumlah_suami = SuamiIstri::where('status', 'Suami')->count();
        $non_pns = nonPegawai::all()->count();
        $pesan = Pesan::all()->count();
        return view('dashboard.layouts.home', compact('jumlah_user', 'jumlah_np',
        'jumlah_nb', 'jumlah_pegawai','jumlah_anak','jumlah_istri','jumlah_suami','non_pns','pesan'));
    }
}
