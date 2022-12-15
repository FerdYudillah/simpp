<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->cari;
        $pesan = Pesan::where('dikirim','LIKE', '%'.$cari. '%')
        ->orWhereHas('user', function($query) use($cari){
            $query->where('name', 'LIKE', '%'.$cari.'%');
        })
        ->sortable()->paginate(10)->withQueryString()->onEachSide(1);
        return view('user.pesan.pesan', compact('pesan','cari'));
        // return view('user.pesan.pesan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan)
    {
        return view('user.pesan.show_pesan',[
            'pesan' => $pesan
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
        //
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
    public function destroy(Pesan $pesan)
    {
        Pesan::destroy($pesan->id);
        return redirect('pesan')->with('delete','Pesan Telah dihapus..!!');
    }
}
