@extends('dashboard.index')
@section('kp','active')
@section('naik_pangkat','active')
<title>SIMPP | Profil PNS Yang Menerima Kenaikan pangkat</title>
@section('content')
<div class="card mb-4">
    <h5 class="card-header">Profile Details : ({{$naikPangkat->pegawai->nama}})</h5>
    <!-- Account -->
    <div class="card-body">
      <div class="d-flex align-items-start align-items-sm-center gap-4">
        <img
          src="{{ asset('storage/' . $naikPangkat->foto) }}"
          alt="user-avatar"
          class="d-block rounded"
          height="110"
          width="120"
          id="foto"
        />
        <div class="button-wrapper">
          @can('admin')
          <a href="/naik_pangkat/{{ $naikPangkat->id }}/edit" class="btn btn-warning me-2 mb-4"  tabindex="0">Edit Data</a>
          @endcan
          <button type="button" class="btn btn-outline-secondary mb-4" >
            <i class="bx bx-reset d-block d-sm-none"></i>
            <a href="/naik_pangkat" >Kembali</a>
            {{-- <span class="d-none d-sm-block">Kembali </span> --}}
          </button>
        </div>
      </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
      <form id="formAccountSettings" method="POST" onsubmit="return false">
        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="nip" class="form-label">NIP</label>
            <input
              class="form-control"
              type="text"
              id="nip"
              name="nip"
              value="{{ $naikPangkat->pegawai->nip }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" value="{{ $naikPangkat->pegawai->nama }}" disabled readonly/>
          </div>
         
        </div>
        
       
        <hr class="dropdown-divider bg-danger">
       <form id="formAccountSettings" method="POST" onsubmit="return false">
        <div class="row">
          <div class="mb-3 col-md-6">
            
            <label for="nip" class="form-label text-success">Pangkat Lama</label>
            <input
              class="form-control "
              type="text"
              id="nip"
              name="nip"
              value="{{ $naikPangkat->pangkat->nama_pangkat }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="nama" class="form-label">Golongan</label>
            <input class="form-control" type="text" name="nama" id="nama" value="{{ $naikPangkat->golongan->nama_golongan }}" disabled readonly/>
          </div>
          <div class="mb-3 col-md-6">
            <label for="email" class="form-label">Jabatan</label>
            <input
              class="form-control"
              value="{{ $naikPangkat->jabatan->nama_jabatan }}"
              disabled readonly
            />
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-md-6">
            
            <label for="nip" class="form-label text-success">Pangkat Baru</label>
            <input
              class="form-control "
              type="text"
              id="nip"
              name="nip"
              value="{{ $naikPangkat->pangkat_baru }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label" for="phoneNumber">Tanggal Mulai </label>
            <div class="input-group input-group-merge">
              <input
                type="text"
                class="form-control text-danger"
                value="{{ $naikPangkat->mulai_tanggal }}"
                disabled readonly
              />
            </div>
          </div>
        </div>

        <div class="form-group mt-2">
          <label  class="form-label">Keterangan </label>
          <article class="form-control">{!! $naikPangkat->ket !!}</article>
      </div>
      
        
      </form>
      </form>
    </div>
    
    <!-- /Account -->

      

  </div>
@endsection