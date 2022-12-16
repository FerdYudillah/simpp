<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\SuamiIstri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class SuamiIstriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $suami_istri = SuamiIstri::where('nama_si','LIKE', '%'.$cari. '%')
        ->orWhere('j_kelamin', 'LIKE', '%' .$cari. '%')
        ->orWhere('status', 'LIKE', '%' .$cari. '%')
        ->orWhere('pekerjaan', 'LIKE', '%' .$cari. '%')
        ->orWhere('umur', 'LIKE', '%' .$cari. '%')
        ->orWhere('nohp', 'LIKE', '%' .$cari. '%')
        ->orWhere('sts_tunjangan', 'LIKE', '%' .$cari. '%')
        ->orWhereHas('pegawai', function($query) use($cari){
            $query->where('nama', 'LIKE', '%'.$cari.'%');
        })
        ->sortable()->paginate(5)->withQueryString()->onEachSide(1);
        return view('pegawai.suami-istri.data_si', compact('suami_istri', 'cari'));

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $this->authorize('admin');
        return view('pegawai.suami-istri.create_si',[
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
        // $this->authorize('admin');
        $validatedData = $request->validate([
            'pegawai_id' => 'required|unique:suami_istri',
            'nama_si' => 'required',
            'j_kelamin' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'umur' => 'required',
            'nohp'=> 'required|unique:suami_istri',
            'sts_tunjangan' => 'required',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'ket' => 'nullable'
        ],[
            
        ]);

        
        SuamiIstri::create($validatedData);
        flash('Data Suami/Istri Berhasil Ditambahkan..');
        return redirect('/suami_istri');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SuamiIstri $suami_istri)
    {
        return view('pegawai.suami-istri.show_si', [
            'suami_istri' => $suami_istri,
            'pegawai' => Pegawai::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SuamiIstri $suami_istri)
    {
        
        $this->authorize('admin');
        return view('pegawai.suami-istri.edit_si',[
            'suami_istri' => $suami_istri,
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
    public function update(Request $request, SuamiIstri $suami_istri)
    {
        
        $this->authorize('admin');
        $rules = [
            'pegawai_id' => 'required',
            'nama_si' => 'required',
            'j_kelamin' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'umur' => 'required',
            'nohp' => 'required',
            'sts_tunjangan' => 'required',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'ket' => 'nullable'
        ];

        $validatedData = $request->validate($rules);

        SuamiIstri::where('id' , $suami_istri->id)
            ->update($validatedData);
        flash('Data Suami/Istri Telah Diedit.');
        return redirect('suami_istri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuamiIstri $suami_istri)
    {
        
        $this->authorize('admin');
        SuamiIstri::destroy($suami_istri->id);
        return redirect('suami_istri')->with('delete','Data Suami/istri Telah dihapus..!!');
    }

    public function exportsi()
    {
        $suami_istri = SuamiIstri::all();
        view()->share('suami_istri', $suami_istri);
        $pdf = Pdf::loadview('pegawai.suami-istri.cetak-si')->setPaper('a4', 'landscape');
        return $pdf->download('daftar-suami-istri-pns.pdf');
    }

    public function exportistri()
    {
        $suami_istri = SuamiIstri::all()->except('status');
        view()->share('suami_istri', $suami_istri);
        $pdf = Pdf::loadview('pegawai.suami-istri.cetak-si')->setPaper('a4', 'landscape');
        return $pdf->download('daftar-suami-istri-pns.pdf');
    }


    
}
