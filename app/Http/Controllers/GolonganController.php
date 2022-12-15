<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\Controller;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 5;
        $data = Golongan::orderBy('id_golongan', 'asc')->sortable()->paginate($pagination);
        return view('dm.golongan.index_gol')->with('data', $data)->with('i', ($request->input('page', 1) - 1) * $pagination);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dm.golongan.create_gol');
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
            'nama_golongan'=> 'required|unique:golongan'
        ]);
        $data = [
            'nama_golongan' => $request->input('nama_golongan')
        ];
        Golongan::create($data);
        flash('Data Golongan Berhasil Ditambakan');
        return redirect('golongan');
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
        $data = Golongan::where('id_golongan', $id)->first();
        return view('dm.golongan.edit_gol')->with('data', $data);
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
            'nama_golongan'=> 'required|unique:golongan'
        ]);
        $data = [
            'nama_golongan' => $request->input('nama_golongan')
        ];
        Golongan::where('id_golongan',$id)->update($data);
        flash('Data Golongan Telah Diedit');
        return redirect('golongan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Golongan::where('id_golongan',$id)->delete();
        flash('Data Golongan Telah Dihapus');
        return redirect('golongan');
    }
}
