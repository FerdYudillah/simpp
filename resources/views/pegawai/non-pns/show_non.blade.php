@extends('dashboard.index')
@section('main','active')
@section('non_pns','active')
<title>SIMPP | Profile Pegawai Non PNS</title>
@section('content')
<div class="card mb-4">
    <h5 class="card-header">Profile/Details PNS : ({{ $nonPegawai->nama }})</h5>
    <!-- Account -->
    <div class="card-body">
      <div class="d-flex align-items-start align-items-sm-center gap-4">  
        <img
          src="{{ asset('storage/' . $nonPegawai->foto) }}"
          alt="user-avatar"
          class="d-block rounded"
          height="110"
          width="120"
          id="foto"
        />  
        <div class="button-wrapper">
          @can('admin')
          <a href="/non_pns/{{ $nonPegawai->id }}/edit" class="btn btn-warning me-2 mb-4"  tabindex="0">Edit Data</a>
          @endcan
          <button type="button" class="btn btn-outline-secondary mb-4" >
            <i class="bx bx-reset d-block d-sm-none"></i>
            <a href="/non_pns" >Kembali</a>
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
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" value="{{ $nonPegawai->nama }}" disabled readonly/>
          </div>
          <div class="mb-3 col-md-6">
            <label for="nip" class="form-label">NITP</label>
            <input
              class="form-control"
              type="text"
              id="nip"
              name="nip"
              value="{{ $nonPegawai->nitp }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="email" class="form-label">Tempat, Tanggal lahir</label>
            <input
              class="form-control"
              value="{{ $nonPegawai->t_lahir }}, {{ $nonPegawai->tgl_lahir }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="organization" class="form-label">Jenis Kelamin</label>
            <input
              type="text"
              class="form-control"
              value="{{ $nonPegawai->j_kelamin }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="state" class="form-label">Agama</label>
            <input class="form-control" type="text" value="{{ $nonPegawai->agama }}" disabled readonly />
          </div>
          <div class="mb-3 col-md-6">
            <label for="zipCode" class="form-label">Tanggal Awal Bekerja</label>
            <input
              type="text"
              class="form-control"
              value="{{ $nonPegawai->awal_kerja }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="zipCode" class="form-label">Pendidikan Awal</label>
            <input
              type="text"
              class="form-control"
              value="{{ $nonPegawai->pend_awal }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="zipCode" class="form-label">Pendidikan Terakhir</label>
            <input
              type="text"
              class="form-control"
              value="{{ $nonPegawai->pend_akhir }}"
              disabled readonly
            />
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">Jabatan</label>
              <input
                class="form-control"
                value="{{ $nonPegawai->jabatan->nama_jabatan }}"
                disabled readonly
              />
            </div>         
          </div>
          <div class="mb-3 col-md-6">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" class="form-control" value="{{ $nonPegawai->alamat }}" disabled readonly />
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label" >No HP</label>
            <div class="input-group input-group-merge">
              <input
                type="text"
                class="form-control"
                value="{{ $nonPegawai->nohp }}"
                disabled readonly
              />
            </div>
          </div>
          
          <div class="form-group mt-2">
            <label  class="form-label">Keterangan Pegawai</label>
            <article class="form-control">{!! $nonPegawai->ket !!}</article>
        </div>
             
        </div>
        
        
       <form id="formAccountSettings" method="POST" onsubmit="return false">
        

      
        
      </form>
      </form>
    </div>
    
    <!-- /Account -->

      

  </div>
@endsection