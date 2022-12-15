@extends('dashboard.index')
@section('main','active')
@section('pegawai','active')
<title>SIMPP | Profile PNS</title>
@section('content')
<div class="card mb-4">
    <h5 class="card-header">Profile/Details PNS ({{ $pegawai->nama }})</h5>
    <!-- Account -->
    <div class="card-body">
      <div class="d-flex align-items-start align-items-sm-center gap-4">
        <img
          src="{{ asset('storage/' . $pegawai->foto) }}"
          alt="user-avatar"
          class="d-block rounded"
          height="110"
          width="120"
          id="foto"
        />
        <div class="button-wrapper">
          @can('admin')
          <a href="/pegawai/{{ $pegawai->id }}/edit" class="btn btn-warning me-2 mb-4"  tabindex="0">Edit Data</a>
          @endcan
          <button type="button" class="btn btn-outline-secondary mb-4" >
            <i class="bx bx-reset d-block d-sm-none"></i>
            <a href="/pegawai" >Kembali</a>
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
              value="{{ $pegawai->nip }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" value="{{ $pegawai->nama }}" disabled readonly/>
          </div>
          <div class="mb-3 col-md-6">
            <label for="email" class="form-label">Tempat, Tanggal lahir</label>
            <input
              class="form-control"
              value="{{ $pegawai->t_lahir }}, {{ $pegawai->tgl_lahir }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="organization" class="form-label">Jenis Kelamin</label>
            <input
              type="text"
              class="form-control"
              value="{{ $pegawai->j_kelamin }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label" >No HP</label>
            <div class="input-group input-group-merge">
              <input
                type="text"
                class="form-control"
                value="{{ $pegawai->nohp }}"
                disabled readonly
              />
            </div>
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label" >Email</label>
            <div class="input-group input-group-merge">
              <input
                type="text"
                class="form-control"
                value="{{ $pegawai->email }}"
                disabled readonly
              />
            </div>
          </div>
          <div class="mb-3 col-md-6">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" class="form-control" value="{{ $pegawai->alamat }}" disabled readonly />
          </div>
          <div class="mb-3 col-md-6">
            <label for="state" class="form-label">Agama</label>
            <input class="form-control" type="text" value="{{ $pegawai->agama }}" disabled readonly />
          </div>
          <div class="mb-3 col-md-6">
            <label for="zipCode" class="form-label">Status Menikah</label>
            <input
              type="text"
              class="form-control"
              value="{{ $pegawai->sts_kawin }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="zipCode" class="form-label">Pendidikan</label>
            <input
              type="text"
              class="form-control"
              value="{{ $pegawai->pendidikan }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="zipCode" class="form-label">Jumlah Anak</label>
            <input
              type="text"
              class="form-control"
              value="{{ $pegawai->jumlah_anak }}"
              disabled readonly
            />
          </div>
        </div>
        <div> <span class="badge bg-primary mt-3 ">Detail Kepegawaian</span></div>
        <hr class="dropdown-divider bg-danger">
       <form id="formAccountSettings" method="POST" onsubmit="return false">
        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="nip" class="form-label">Pangkat</label>
            <input
              class="form-control "
              type="text"
              id="nip"
              name="nip"
              value="{{ $pegawai->pangkat->nama_pangkat }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="nama" class="form-label">Golongan</label>
            <input class="form-control" type="text" name="nama" id="nama" value="{{ $pegawai->golongan->nama_golongan }}" disabled readonly/>
          </div>
          <div class="mb-3 col-md-6">
            <label for="email" class="form-label">Jabatan</label>
            <input
              class="form-control"
              value="{{ $pegawai->jabatan->nama_jabatan }}"
              disabled readonly
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="organization" class="form-label">Status Pegawai</label>
            <input
              type="text"
              class="form-control text-success"
              value="{{ $pegawai->sts_pegawai }}"
              disabled readonly
            />
          </div>
          <div class="row">
          <div class="mb-3 col-md-6">
            <label class="form-label" >Masa Kerja</label>
            <div class="input-group input-group-merge">
              <input
                type="text"
                class="form-control"
                value="{{ $pegawai->masa_kerja }}"
                disabled readonly
              />
            </div>
          </div>
          <div class="mb-3 col-md-6">
            <label for="address" class="form-label">Gaji Pokok</label>
            <input type="text" class="form-control" value="{{ $pegawai->gaji }}" disabled readonly />
          </div>
          <div class="mb-3 col-md-6">
            <label for="address" class="form-label">TMT</label>
            <input type="text" class="form-control" value="{{ $pegawai->tmt }}" disabled readonly />
          </div>
          </div>
            <div class="mb-4 col-md-8">
              <label for="address" class="form-label">Pelatihan</label>
              <input type="text" class="form-control" value="{{ $pegawai->pelatihan }}" disabled readonly />
            </div>
          <div class="row">
          <div class="mb-3 col-md-6">
            <label for="state" class="form-label">Tanggal Naik Berkala</label>
            <input class="form-control text-warning" type="text" value="{{ $pegawai->naik_berkala }} <?php 
            $datetime2 = strtotime($pegawai->naik_berkala) ;
            $datenow = strtotime(date("Y-m-d"));
            $durasi = ($datetime2 - $datenow) / 86400 ;
        ?>
        @if ($durasi < 0   ) 
            (Kenaikan Terlambat / {{ $durasi  }} Hari)
        @else
           (Waktu Kenaikan Tinggal {{ $durasi  }} Hari Lagi) 
        @endif" disabled readonly />
          </div>
          <div class="mb-3 col-md-6">
            <label for="zipCode" class="form-label">Tanggal Naik Pangkat</label>
            <input
              type="text"
              class="form-control text-success"
              value="{{ $pegawai->naik_pangkat }} <?php 
              $datetime2 = strtotime($pegawai->naik_pangkat) ;
              $datenow = strtotime(date("Y-m-d"));
              $durasi = ($datetime2 - $datenow) / 86400 ;
          ?>
          @if ($durasi < 0   ) 
              (Kenaikan Terlambat / {{ $durasi  }} Hari)
          @else
             (Waktu Kenaikan Tinggal {{ $durasi  }} Hari Lagi) 
          @endif"
              disabled readonly
            />
          </div>
        </div>
        </div>
      </form>
      <div class="form-group mt-2">
        <label  class="form-label">Keterangan</label>
        <article class="form-control">{!! $pegawai->ket !!}</article>
    </div>
      </form>
    </div>     
  </div>
@endsection