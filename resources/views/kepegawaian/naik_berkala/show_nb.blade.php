@extends('dashboard.index')
@section('kp','active')
@section('naik_berkala','active')
<title>SIMPP | Profil PNS Yang Menerima Kenaikan Gaji Berkala</title>
@section('content')
<div class="card mb-4">
    <h5 class="card-header">Profile/Details PNS ({{ $naikBerkala->pegawai->nama }}) Yang Menerima Kenaikan Gaji Berkala</h5>

    <!-- Account -->
    <div class="card-body">
      <div class="d-flex align-items-start align-items-sm-center gap-4">
        <img
          src="{{ asset('storage/' . $naikBerkala->foto) }}"
          alt="user-avatar"
          class="d-block rounded"
          height="110"
          width="120"
          id="foto"
        />
        <div class="button-wrapper">
          @can('admin')
          <a href="/naik_berkala/{{ $naikBerkala->id }}/edit" class="btn btn-warning me-2 mb-4"  tabindex="0">Edit Data</a>
          @endcan
          <button type="button" class="btn btn-outline-secondary mb-4" >
            <i class="bx bx-reset d-block d-sm-none"></i>
            <a href="/naik_berkala" >Kembali</a>
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
              value="{{ $naikBerkala->pegawai->nip }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" value="{{ $naikBerkala->pegawai->nama }}" disabled readonly/>
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label" for="phoneNumber">Tempat Tanggal lahir</label>
            <div class="input-group input-group-merge">
              <input
                type="text"
                class="form-control"
                value="{{ $naikBerkala->t_lahir }}, {{ $naikBerkala->tgl_lahir }}"
                disabled readonly
              />
            </div>
        </div>
        
       
        <hr class="dropdown-divider bg-danger">
       <form id="formAccountSettings" method="POST" onsubmit="return false">
        <div class="row">
          <div class="mb-3 col-md-6">
            
            <label for="nip" class="form-label ">Pangkat </label>
            <input
              class="form-control "
              type="text"
              id="nip"
              name="nip"
              value="{{ $naikBerkala->pangkat->nama_pangkat }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="nama" class="form-label">Golongan</label>
            <input class="form-control" type="text" name="nama" id="nama" value="{{ $naikBerkala->golongan->nama_golongan }}" disabled readonly/>
          </div>
          <div class="mb-3 col-md-6">
            <label for="email" class="form-label">Jabatan</label>
            <input
              class="form-control"
              value="{{ $naikBerkala->jabatan->nama_jabatan }}"
              disabled readonly
            />
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-md-6">
            
            <label for="nip" class="form-label text-success">Gaji Lama</label>
            <input
              class="form-control "
              type="text"
              id="nip"
              name="nip"
              value="{{ formatRupiah($naikBerkala->gaji_lama) }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label text-success" for="phoneNumber">Gaji Baru</label>
            <div class="input-group input-group-merge">
              <input
                type="text"
                class="form-control "
                value="{{ formatRupiah($naikBerkala->gaji_baru) }}"
                disabled readonly
              />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="mb-3 col-md-6">
            
            <label for="nip" class="form-label ">Masa Kerja</label>
            <input
              class="form-control "
              type="text"
              id="nip"
              name="nip"
              value="{{ $naikBerkala->masa_kerja }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label " for="phoneNumber">Mulai tanggal</label>
            <div class="input-group input-group-merge">
              <input
                type="text"
                class="form-control text-danger "
                value="{{ $naikBerkala->mulai_tgl }}"
                disabled readonly
              />
            </div>
          </div>
        </div>

        <div class="form-group mt-2">
          <label  class="form-label">Keterangan </label>
          <article class="form-control">{!! $naikBerkala->ket !!}</article>
      </div>
      
        
      </form>
      </form>
    </div>
    
    <!-- /Account -->

      

  </div>
@endsection