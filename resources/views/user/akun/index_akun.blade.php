@extends('dashboard.index')
@section('ds','active')
@section('data_diri','active')
<title>SIMPP | Akun</title>
@section('content')
    <div class="card mb-4">
        <h3 class="card-header">Akun Profile :</h3>
        <div class="card-body">
            <div class="table-responsive">
                <table width="360"> 
                    @foreach ($akun as $item)
                <tr>
                    <td><h5>Nama</h5></td>
                    <td><h5>:</h5></td>
                    <td><h5>{{ $item->name }}</h5></td>
                 </tr>

                 <tr>
                    <td><h5>Email</h5></td>
                    <td><h5>:</h5></td>
                    <td><h5>{{ $item->email }}</h5></td>
                 </tr>

                 <tr>
                    <td><h5>Username</h5></td>
                    <td><h5>:</h5></td>
                    <td><h5>{{ $item->username }}</h5></td>
                 </tr>
                 <tr>
                    <td></td>
                 </tr>   
                 @endforeach
                </table>
                <br>
                <form action="/akun" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="pesan"><h4>Kirim Pesan</h4></label>
                    @error('pesan')
                        <p class="text-danger">{{ 'Isikan Keterangan' }}</p>
                    @enderror
                    <input id="pesan" type="hidden" name="pesan" value="{{ old('pesan') }}">
                    <trix-editor input="pesan"></trix-editor>
                  </div>
                  <br>
                  <label><h4>Tanggal Pesan Dikirim</h4></label>
                  <div class="col-sm-5">
                    <input type="date" name="dikirim" id="dikirim" class="form-control ">
                  </div>
                  <button class="btn btn-danger btn-sm mt-2">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection