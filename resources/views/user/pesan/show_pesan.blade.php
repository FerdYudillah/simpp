@extends('dashboard.index')
@section('ds','active')
@section('pesan','active')
<title>SIMPP | Baca Pesank </title>
@section('content')
<div class="card mb-4">
    <h4 class="card-header">Baca Pesan</h4>
    <!-- Account -->
    <div class="card-body">
        <div class="button-wrapper">
          <button type="button" class="btn btn-outline-secondary mb-4" >
            <i class="bx bx-reset d-block d-sm-none"></i>
            <a href="/pesan" >Kembali</a>
          </button>
        </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="form-group">
                <div class="mb-3 col-md-6">
                  <label for="user_id" class="form-label">Nama Pengirim :</label>
                  <input
                    class="form-control"
                    type="text"
                    value="{{ $pesan->user->name }} "
                    disabled readonly
                  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="dikirim" class="form-label">Tanggal Pesan Dikirim :</label>
                  <input
                    class="form-control"
                    type="text"
                    name="dikirim"
                    value="{{ $pesan->dikirim }} "
                    disabled readonly
                  />
                </div>
            </div>
          
      
            <div class="form-group mt-2">
                <label  class="form-label">Pesan</label>
                <article class="form-control">{!! $pesan->pesan !!}</article>
            </div>

          </div>
            </form>
      </div>
    
    <!-- /Account -->

      

  </div>
@endsection