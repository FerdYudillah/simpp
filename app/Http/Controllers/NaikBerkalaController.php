<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pangkat;
use App\Models\Pegawai;
use App\Models\Golongan;
use App\Models\NaikBerkala;
use App\Models\NaikPangkat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NaikBerkalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $naikBerkala = NaikBerkala::whereHas('pegawai',function($query) use($cari){
            $query->where('nama', 'LIKE', '%'.$cari.'%');
        })
        ->orWhereHas('pangkat', function($query) use($cari){
            $query->where('nama_pangkat', 'LIKE', '%'.$cari.'%');
        })
        ->orWhereHas('jabatan', function($query) use($cari){
            $query->where('nama_jabatan', 'LIKE', '%'.$cari.'%');
        })
        ->sortable()->paginate(5)->withQueryString()->onEachSide(1);
        return view('kepegawaian.naik_berkala.index_nb', compact('naikBerkala','cari'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        return view('kepegawaian.naik_berkala.tamba_nb', [
            'pegawai' => Pegawai::all(),
            'pangkat' => Pangkat::all(),
            'golongan' => Golongan::all(),
            'jabatan' => Jabatan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');
        $validatedData = $request->validate([
            'pegawai_id' => 'required|unique:naik_berkala',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'pangkat_id' =>  'required',
            'jabatan_id' =>  'required',
            'gaji_lama' =>  'required',
            'gaji_baru' =>  'required',
            'masa_kerja' => 'required',
            'golongan_id' =>  'required',
            'mulai_tgl' => 'required',
            'foto' => 'mimes:jpeg,jpg,png|image|file|max:2024',
            'ket' => 'nullable'
        ], [
            'naik_berkala' => 'Tanggal Naik Berkala Harus Diisi',
            'j_kelamin.required' => 'Jenis Kelamin Wajib Diisi',
        ]);

        if($request->file('foto')){
            $validatedData['foto'] = $request->file('foto')->store('images');
        }


        NaikBerkala::create($validatedData);
        flash('Data PNS yang akan naik Berkala berhasil ditambahkan.. ');
        return redirect('/naik_berkala');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(NaikBerkala $naikBerkala)
    {
        return view('kepegawaian.naik_berkala.show_nb', [
            'naikBerkala' => $naikBerkala,
            'pegawai' => Pegawai::all(),
            'pangkat' => Pangkat::all(),
            'golongan' => Golongan::all(),
            'jabatan' => Jabatan::all()


        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(NaikBerkala $naikBerkala)
    {
        $this->authorize('admin');
        return view('kepegawaian.naik_berkala.edit_nb',[
            'naikBerkala' => $naikBerkala,
            'pegawai' => Pegawai::all(),
            'pangkat' => Pangkat::all(),
            'golongan' => Golongan::all(),
            'jabatan' => Jabatan::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NaikBerkala $naikBerkala)
    {
        $this->authorize('admin');
        $rules = [
            'pegawai_id' => 'required',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'pangkat_id' =>  'required',
            'jabatan_id' =>  'required',
            'gaji_lama' =>  'required',
            'gaji_baru' =>  'required',
            'masa_kerja' => 'required',
            'golongan_id' =>  'required',
            'mulai_tgl' => 'required',
            'foto' => 'mimes:jpeg,jpg,png|image|file|max:2024',
            'ket' => 'nullable'
        ];

        $validatedData = $request->validate($rules);
        if($request->file('foto')){
            if($request->oldFoto){
                Storage::delete($request->oldFoto);
            }
            $validatedData['foto'] = $request->file('foto')->store('images');
        }

        NaikBerkala::where('id' , $naikBerkala->id)
            ->update($validatedData);
        flash('Data PNS yang akan Naik Berkala telah Diupate');
        return redirect('naik_berkala');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(NaikBerkala $naikBerkala)
    {

        $this->authorize('admin');
        if($naikBerkala->foto){
            Storage::delete($naikBerkala->foto);
        }
        NaikBerkala::destroy($naikBerkala->id);
        return redirect('naik_berkala')->with('delete','Data PNS Telah dihapus..!!');
    }

    public function exportberkala()
    {
        $naikBerkala = NaikBerkala::all();
        view()->share('naikBerkala', $naikBerkala);
        $pdf = Pdf::loadview('kepegawaian.naik_berkala.cetak-nb')->setPaper('a4', 'landscape');
        return $pdf->download('daftar-pns-naik-berkala.pdf');
    }

    public function nbExcel()
    {
        $naikBerkala = NaikBerkala::all();
        return view('kepegawaian.naik_berkala.nb_excel', compact('naikBerkala'));
    }

}
