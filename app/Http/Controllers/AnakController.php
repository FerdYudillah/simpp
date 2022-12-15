<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $anak = Anak::where('nama','LIKE', '%'.$cari. '%')
        ->orWhere('umur', 'LIKE', '%' .$cari. '%')
        ->orWhere('status', 'LIKE', '%' .$cari. '%')
        ->orWhere('tunjangan', 'LIKE', '%' .$cari. '%')
        ->orWhereHas('pegawai', function($query) use($cari){
            $query->where('nama', 'LIKE', '%'.$cari.'%');
        })
        ->sortable()->paginate(10)->withQueryString()->onEachSide(1);
        return view('pegawai.anak.data_anak', compact('anak','cari'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $this->authorize('admin');
        return view('pegawai.anak.create_anak',[
            'pegawai' => Pegawai::all()
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
        
        $request->validate([
            'pegawai_id' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'umur' => 'required',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'tgl_umur_21' => 'nullable',
            'jenis_kelamin' => 'required',
            'sts_nikah' => 'nullable',
            'pendidikan' => 'required',
            'tgl_lulus_sekolah' => 'nullable',
            'ket' => 'nullable',
            'tunjangan' => 'required'

        ]);

        
        Anak::create($request->all());
        flash('Data Anak Berhasil Ditambahkan');
        return redirect('anak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Anak $anak)
    {
        return view('pegawai.anak.show_anak', [
            'anak' => $anak,
            'pegawai' => Pegawai::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Anak $anak)
    {  
         $this->authorize('admin');
        return view('pegawai.anak.edit_anak',[
            'anak' => $anak,
            'pegawai' => Pegawai::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anak $anak)
    {
        
        $rules = [
     
            'pegawai_id' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'umur' => 'required',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'tgl_umur_21' => 'nullable',
            'jenis_kelamin' => 'required',
            'sts_nikah' => 'nullable',
            'pendidikan' => 'required',
            'tgl_lulus_sekolah' => 'nullable',
            'ket' => 'nullable',
            'tunjangan' => 'required'

            
        ];

        $validatedData = $request->validate($rules);

        

        Anak::where('id', $anak->id)
            ->update($validatedData);
        flash('Data Anak Telah Diupdate');
        return redirect('anak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anak $anak)
    {
        $this->authorize('admin');
        Anak::destroy($anak->id);
        return redirect('anak')->with('delete','Data Anak Telah dihapus..!!');
    }

    public function exportanak()
    {
        $anak = Anak::all();
        view()->share('anak', $anak);
        $pdf = Pdf::loadview('pegawai.anak.anak-cetak')->setPaper('a4', 'landscape');
        return $pdf->download('daftar-anak-pns.pdf');
    }
   
}
