<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\nonPegawai;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NonPNSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cari = $request->cari;
        $nonPegawai = nonPegawai::where('nama','LIKE', '%'.$cari. '%')
        ->orWhere('nitp', 'LIKE', '%' .$cari. '%')
        ->orWhere('j_kelamin', 'LIKE', '%' .$cari. '%')
        ->orWhere('t_lahir', 'LIKE', '%' .$cari. '%')
        ->orWhere('tgl_lahir', 'LIKE', '%' .$cari. '%')
        ->orWhere('awal_kerja', 'LIKE', '%' .$cari. '%')
        ->orWhere('pend_awal', 'LIKE', '%' .$cari. '%')
        ->orWhere('pend_akhir', 'LIKE', '%' .$cari. '%')
        ->orWhereHas('jabatan', function($query) use($cari){
            $query->where('nama_jabatan', 'LIKE', '%'.$cari.'%');
        })
        ->sortable()->paginate(5)->withQueryString()->onEachSide(1);
        return view('pegawai.non-pns.data_non', compact('nonPegawai', 'cari'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        return view('pegawai.non-pns.tambah_non',[
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
        $validatedData = $request->validate([
            'nama' => 'required|max:200',
            'nitp' => 'required|unique:non_pns',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'j_kelamin' =>  'required',
            'agama' => 'required',
            'awal_kerja' =>  'required',
            'pend_awal' => 'required',
            'pend_akhir' => 'required',
            'jabatan_id' =>  'required',
            'alamat'  =>  'required',
            'nohp' =>  'required|unique:non_pns',
            'ket' => 'nullable',
            'foto' => 'nullable'
        ]);

        if($request->file('foto')){
            $validatedData['foto'] = $request->file('foto')->store('images');
        } 
        
        nonPegawai::create($validatedData);
        flash('Data Pegawai Non PNS berhasil Ditambahkan..');
        return redirect('/non_pns');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nonPegawai = nonPegawai::where('id', $id)->first();
        return view('pegawai.non-pns.show_non',[
            'nonPegawai' => $nonPegawai,
            'jabatan' => Jabatan::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('admin');

        $nonPegawai = nonPegawai::where('id', $id)->first();
        return view('pegawai.non-pns.edit_non',[
            'nonPegawai' => $nonPegawai,
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
    public function update(Request $request,$id)
    {
        $rules = [
            'nama' => 'required|max:200',
            'nitp' => 'required',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'j_kelamin' =>  'required',
            'agama' => 'required',
            'awal_kerja' =>  'required',
            'pend_awal' => 'required',
            'pend_akhir' => 'required',
            'jabatan_id' =>  'required',
            'alamat'  =>  'required',
            'nohp' =>  'required',
            'ket' => 'nullable',
            'foto' => 'nullable'
         ];

        
         $validatedData = $request->validate($rules);
         if($request->file('foto')){
            if($request->oldFoto){
                Storage::delete($request->oldFoto);
            }
            $validatedData['foto'] = $request->file('foto')->store('images');
        }

        
        nonPegawai::where('id' , $id)
            ->update($validatedData);
        flash('Data Pegawai Non PNS telah Diedit..');
        return redirect('non_pns');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        $nonPegawai = nonPegawai::find($id);
        if($nonPegawai->foto){
            Storage::delete($nonPegawai->foto);
        }
        nonPegawai::where('id',$id)->delete();
        flash('Data Jabatan Telah Dihapus');
        return redirect('non_pns');
    }

    public function exportNon()
    {
        $nonPegawai = nonPegawai::all();
        view()->share('nonPegawai', $nonPegawai);
        $pdf = Pdf::loadview('pegawai.non-pns.non_cetak')->setPaper('a4', 'landscape');
        return $pdf->download('daftar-non-pns.pdf');
    }
}
