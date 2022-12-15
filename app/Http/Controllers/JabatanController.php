<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class jabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 5;
        $data = Jabatan::orderBy('id_jabatan', 'asc')->paginate($pagination);
        return view('dm.jabatan.index_jab')->with('data', $data)->with('i', ($request->input('page', 1) - 1) * $pagination);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dm.jabatan.create_jab');
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
            'nama_jabatan'=> 'required|unique:jabatan'
        ]);
        $data = [
            'nama_jabatan' => $request->input('nama_jabatan')
        ];
        Jabatan::create($data);
        flash('Data Jabatan Berhasil Ditambahkan..');
        return redirect('jabatan');
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
        $data = Jabatan::where('id_jabatan', $id)->first();
        return view('dm.jabatan.edit_jab')->with('data', $data);
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
            'nama_jabatan'=> 'required|unique:jabatan'
        ]);
        $data = [
            'nama_jabatan' => $request->input('nama_jabatan')
        ];
        Jabatan::where('id_jabatan',$id)->update($data);
        flash('Data Jabatan Telah Diedit');
        return redirect('jabatan');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jabatan::where('id_jabatan',$id)->delete();
        flash('Data Jabatan Telah Dihapus');
        return redirect('jabatan');
    }
}
