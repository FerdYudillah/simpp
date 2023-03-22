<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pangkat;
use App\Models\Pegawai;
use App\Models\Golongan;
use App\Models\NaikPangkat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class NaikPangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cari = $request->cari;
        $naikPangkat = NaikPangkat::whereHas('pegawai',function($query) use($cari){
            $query->where('nama', 'LIKE', '%'.$cari.'%');
        })
        ->orWhereHas('pangkat', function($query) use($cari){
            $query->where('nama_pangkat', 'LIKE', '%'.$cari.'%');
        })
        ->orWhereHas('jabatan', function($query) use($cari){
            $query->where('nama_jabatan', 'LIKE', '%'.$cari.'%');
        })
        ->sortable()->paginate(5)->withQueryString()->onEachSide(1);
        return view('kepegawaian.naik_pangkat.index_np', compact('naikPangkat','cari'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        return view('kepegawaian.naik_pangkat.tambah_np', [
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
            'pegawai_id' => 'required|unique:naik_pangkat',
            'pangkat_id' =>  'required',
            'jabatan_id' =>  'required',
            'golongan_id' =>  'required',
            'pangkat_baru' => 'required',
            'mulai_tanggal' => 'required',
            'foto' => 'mimes:jpeg,jpg,png|image|file|max:2024',
            'ket' => 'nullable'
        ]);

        if($request->file('foto')){
            $validatedData['foto'] = $request->file('foto')->store('images');
        }


        NaikPangkat::create($validatedData);
        flash('Data PNS Yang akan naik Pangkat berhasil Ditambahkan..');
        return redirect('/naik_pangkat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(NaikPangkat $naikPangkat)
    {
        return view('kepegawaian.naik_pangkat.show_np', [
            'naikPangkat' => $naikPangkat,
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
    public function edit(NaikPangkat $naikPangkat)
    {
        $this->authorize('admin');
        return view('kepegawaian.naik_pangkat.edit_np',[
            'naikPangkat' => $naikPangkat,
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
    public function update(Request $request, NaikPangkat $naikPangkat)
    {
        $this->authorize('admin');
        $rules = [
            'pegawai_id' => 'required',
            'pangkat_id' =>  'required',
            'jabatan_id' =>  'required',
            'golongan_id' =>  'required',
            'pangkat_baru' => 'required',
            'mulai_tanggal' => 'required',
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


        NaikPangkat::where('id' , $naikPangkat->id)
            ->update($validatedData);
        flash('Data PNS yang akan Naik Pangkat telah Diupate');
        return redirect('naik_pangkat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(NaikPangkat $naikPangkat)
    {
        $this->authorize('admin');
        if($naikPangkat->foto){
            Storage::delete($naikPangkat->foto);
        }

        NaikPangkat::destroy($naikPangkat->id);
        return redirect('naik_pangkat')->with('delete','Data PNS Telah dihapus..!!');
    }

    public function exportpangkat()
    {
        $naikPangkat = NaikPangkat::all();
        view()->share('naikPangkat', $naikPangkat);
        $pdf = Pdf::loadview('kepegawaian.naik_pangkat.cetak-np')->setPaper('a4', 'landscape');
        return $pdf->download('daftar-pns-naik-pangkat.pdf');
    }

    public function npExcel()
    {
        $naikPangkat = NaikPangkat::all();
        return view('kepegawaian.naik_pangkat.np_excel', compact('naikPangkat'));
    }
}
