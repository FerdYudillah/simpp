<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jabatan;
use App\Models\Pangkat;
use App\Models\Pegawai;
use App\Models\Golongan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pesan;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('user.akun.index_akun', [
            'akun' => User::where('id',auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
            'pesan' => 'nullable',
            'dikirim'=> 'nullable'
        ]);


        $validatedData['user_id'] = auth()->user()->id;
        Pesan::create($validatedData);
        flash('Pesan Berhasil Dikirim..');
        return redirect('/akun');
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
    public function edit($akun)
    {
        return view('user.akun.edit_user',[
            'akun' => $akun
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
