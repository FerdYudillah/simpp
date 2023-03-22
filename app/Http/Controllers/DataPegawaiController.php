<?php

namespace App\Http\Controllers;


use App\Models\Jabatan;
use App\Models\Pangkat;
use App\Models\Pegawai;
use App\Models\Golongan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;


class DataPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cari = $request->cari;
        $pegawai = Pegawai::where('nama','LIKE', '%'.$cari. '%')
        ->orWhere('nip', 'LIKE', '%' .$cari. '%')
        ->orWhere('j_kelamin', 'LIKE', '%' .$cari. '%')
        ->orWhereHas('jabatan', function($query) use($cari){
            $query->where('nama_jabatan', 'LIKE', '%'.$cari.'%');
        })
        ->orwhereHas('golongan', function($query) use($cari){
            $query->where('nama_golongan', 'LIKE', '%'.$cari.'%');
        })
        ->orWhereHas('pangkat', function($query) use($cari){
            $query->where('nama_pangkat', 'LIKE', '%'.$cari.'%');
        })
        ->sortable()->paginate(5)->withQueryString()->onEachSide(1);
        return view('pegawai.data', compact('pegawai', 'cari'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        return view('pegawai.tambah',[
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

        $validatedData = $request->validate([
            'nip' => 'required|unique:pegawai',
            'nama' => 'required|max:200',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'j_kelamin' =>  'required',
            'pangkat_id' =>  'required',
            'jabatan_id' =>  'required',
            'masa_kerja' =>  'required',
            'golongan_id' =>  'required',
            'gaji' =>  'required',
            'naik_berkala' =>  'required',
            'naik_pangkat' =>  'required',
            'alamat'  =>  'required',
            'nohp' =>  'required|unique:pegawai',
            'agama' => 'required',
            'sts_kawin'  => 'required',
            'sts_pegawai' => 'required',
            'pendidikan' => 'required',
            'foto' => 'mimes:jpeg,jpg,png|image|file|max:2024',
            'jumlah_anak' => 'nullable',
            'email'  => 'required|unique:pegawai|email:dns',
            'tmt' => 'required',
            'pelatihan' => 'required',
            'ket' => 'nullable'
        ], [
            'naik_berkala' => 'Tanggal Naik Berkala Harus Diisi',
            'j_kelamin.required' => 'Jenis Kelamin Wajib Diisi',
        ]);

        if($request->file('foto')){
            $validatedData['foto'] = $request->file('foto')->store('images');
        }


        Pegawai::create($validatedData);
        flash('Data PNS berhasil Ditambahkan..');
        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawai.show', [
            'pegawai' => $pegawai,
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
    public function edit(Pegawai $pegawai)
    {
        $this->authorize('admin');
        return view('pegawai.edit',[
            'pegawai' => $pegawai,
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
    public function update(Request $request, Pegawai $pegawai)
    {

        $rules = [
            'nip' => 'required',
            'nama' => 'required|max:200',
            't_lahir' => 'required',
            'tgl_lahir' => 'required',
            'j_kelamin' =>  'required',
            'pangkat_id' =>  'required',
            'jabatan_id' =>  'required',
            'masa_kerja' =>  'required',
            'golongan_id' =>  'required',
            'gaji' =>  'required',
            'naik_berkala' =>  'required',
            'naik_pangkat' =>  'required',
            'alamat'  =>  'required',
            'nohp' =>  'required',
            'agama' => 'required',
            'sts_kawin'  => 'required',
            'sts_pegawai' => 'required',
            'pendidikan' => 'required',
            'foto' => 'mimes:jpeg,jpg,png|image|file|max:3024',
            'jumlah_anak' => 'nullable',
            'email'  => 'required|email:dns',
            'tmt' => 'required',
            'pelatihan' => 'required',
            'ket' => 'nullable'
         ];


         $validatedData = $request->validate($rules);


         if($request->file('foto')){
            if($request->oldFoto){
                Storage::delete($request->oldFoto);
            }
            $validatedData['foto'] = $request->file('foto')->store('images');
        }


        Pegawai::where('id' , $pegawai->id)
            ->update($validatedData);
        flash('Data PNS telah Diedit..');
        return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Pegawai $pegawai)
    {

        $this->authorize('admin');
        if($pegawai->foto){
            Storage::delete($pegawai->foto);
        }

        Pegawai::destroy($pegawai->id);
        return redirect('pegawai')->with('delete','Data Pegawai Telah dihapus..!!');
    }

    public function exportpdf()
    {
        $pegawai = Pegawai::all();
        view()->share('pegawai', $pegawai);
        $pdf = Pdf::loadview('pegawai.pegawai-cetak')->setPaper('a4', 'landscape');
        return $pdf->download('daftar-pns.pdf');
    }

    public function exportPegawai(Pegawai $pegawai)
    {

        $pegawai = Pegawai::where('id', $pegawai->id);
        // view()->share('pegawai', $pegawai);
        $pdf = Pdf::loadview('pegawai.pegawai_cetak')->setPaper('a4', 'landscape');
        return $pdf->download('data-pns.pdf');
    }

    public function pegawaiExcel()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.pegawai_excel', compact('pegawai'));
    }



}
