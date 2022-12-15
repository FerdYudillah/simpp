<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $cari = $request->cari;
        $user = User::Where('name', 'LIKE', '%'.$cari.'%')
        ->orWhere('email','LIKE','%'.$cari.'%')
        ->orWhere('username','LIKE','%'.$cari.'%')
        ->orWhere('level','LIKE','%'.$cari.'%')
        ->sortable()->paginate(10)->withQueryString()->onEachSide(1);
        return view('user.data_user',compact('user', 'cari'));
        // return view('user.data_user',[
        //     'user' => User::sortable()->paginate(10)
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('user.create_user',[
            'user' => User::all()
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
            'name' => 'required',
            'username' => 'required|max:200|min:5|unique:users',
            'email'  => 'required|email:dns|unique:users',
            'password' => 'required',
            'level' => 'nullable'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
               
        User::create($validatedData);
        flash('Data User berhasil Ditambahkan..');
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show_user',[
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit_user',[
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required',
            'username' => 'required|max:200|min:5',
            'email'  => 'required|email:dns',
            'password' => 'required',
            'level' => 'nullable'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id' , $user->id)
            ->update($validatedData);
        flash('Data User telah Diubah..');
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
       
        User::destroy($user->id);
        return redirect('user')->with('delete','Data User Telah dihapus..!!');
    }

    
}
