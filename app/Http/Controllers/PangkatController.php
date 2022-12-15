<?php

namespace App\Http\Controllers;

use App\Models\Pangkat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NaikPangkat;
use Barryvdh\DomPDF\Facade\Pdf;

class PangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $pagination = 5;
        $data = Pangkat::orderBy('id_pangkat', 'asc')->sortable()->paginate($pagination);
        return view('dm.pangkat.index_pang')->with('data', $data)->with('i', ($request->input('page', 1) - 1) * $pagination);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('dm.pangkat.create_pang');
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
            'nama_pangkat'=> 'required|unique:pangkat'
        ]);
        $data = [
            'nama_pangkat' => $request->input('nama_pangkat')
        ];
        Pangkat::create($data);
        flash('Data Pangkat Berhasil Ditambahkan');
        return redirect('pangkat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pangkat::where('id_pangkat', $id)->first();
        return view('dm.pangkat.edit_pang')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pangkat'=> 'required|unique:pangkat'
        ]);
        $data = [
            'nama_pangkat' => $request->input('nama_pangkat')
        ];
        Pangkat::where('id_pangkat',$id)->update($data);
        flash('Data Pangkat Berhasil Diedit');
        return redirect('pangkat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pangkat::where('id_pangkat',$id)->delete();
        flash('Data Pangkat Telah Dihapus..');
        return redirect('pangkat');
    }

    public function exportpangkat()
    {
        $naikPangkat = NaikPangkat::all();
        view()->share('naikPangkat', $naikPangkat);
        $pdf = Pdf::loadview('kepegawaian.naik_pangkat.cetak-np')->setPaper('a4', 'landscape');
        return $pdf->download('daftar-pns-naik-pangkat.pdf');
    }
}
