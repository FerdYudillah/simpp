@extends('dashboard.index')
@section('main','active')
@section('anak','active')
<title>SIMPP | Profil Anak </title>
@section('content')
<div class="card mb-4">
    <h5 class="card-header">Profile Anak ({{ $anak->nama }})</h5>
    <!-- Account -->
    <div class="card-body">
        <div class="button-wrapper">
          @can('admin')
          <a href="/anak/{{ $anak->id }}/edit" class="btn btn-warning me-2 mb-4"  tabindex="0">Edit Data</a>
          @endcan
          <button type="button" class="btn btn-outline-secondary mb-4" >
            <i class="bx bx-reset d-block d-sm-none"></i>
            <a href="/anak" >Kembali</a>
            {{-- <span class="d-none d-sm-block">Kembali </span> --}}
          </button>
        </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="form-group">
                <div class="mb-3 col-md-6">
                    <span class="badge bg-dark mb-2">Nama PNS / Orang Tua Anak</span>
                  {{-- <label for="pegawai_id" class="form-label">Nama PNS / Orang Tua Anak</label> --}}
                  <input
                    class="form-control"
                    type="text"
                    value="{{ $anak->pegawai->nama }} - NIP : {{ $anak->pegawai->nip }}"
                    disabled readonly
                  />
                </div>
            </div>
          
            <div class="mb-3 col-md-6">
              <label for="lastName" class="form-label text-dark">Nama Anak</label>
              <input class="form-control" type="text"  value="{{ $anak->nama }}" disabled readonly/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="organization" class="form-label">Umur</label>
              <input
                type="text"
                class="form-control"
                value="{{ $anak->umur }}"
                disabled readonly
              />
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="phoneNumber">Tempat Tanggal lahir</label>
              <div class="input-group input-group-merge">
                <input
                  type="text"
                  class="form-control"
                  value="{{ $anak->t_lahir }}, {{ $anak->tgl_lahir }}"
                  disabled readonly
                />
              </div>
            </div>
   
      
                    <div class="mb-3 col-md-6">
                      <span class="badge bg-dark mb-2">Tanggal Anak Akan Berumur 21</span>
                        <input type="text" class="form-control"  value="{{ $anak->tgl_umur_21 }} <?php 
                        $datetime2 = strtotime($anak->tgl_umur_21) ;
                        $datenow = strtotime(date("Y-m-d"));
                        $durasi = ($datetime2 - $datenow) / 86400 ;
                    ?>
                    @if ($durasi < 0   ) 
                        (Sudah Berumur 21 ( Telah Lewat {{ $durasi  }} Hari))
                    @else
                       (Akan Berumur 21 dalam {{ $durasi  }} Hari Lagi) 
                    @endif"   disabled readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label  class="form-label">Jenis Kelamin Anak</label>
                        <input class="form-control" type="text" value="{{ $anak->jenis_kelamin }}"   disabled readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label class="form-label">Status Menikah</label>
                        <input
                          type="text"
                          class="form-control"
                          value="{{ $anak->sts_nikah }}"
                          disabled readonly
                        />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label  class="form-label">Pendidikan</label>
                        <input class="form-control" type="text" value="{{ $anak->pendidikan }}"   disabled readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label class="form-label">Tanggal Lulus Sekolah</label>
                        <input
                          type="text"
                          class="form-control"
                          value="{{ $anak->tgl_lulus_sekolah }} <?php 
                          $datetime2 = strtotime($anak->tgl_lulus_sekolah) ;
                          $datenow = strtotime(date("Y-m-d"));
                          $durasi = ($datetime2 - $datenow) / 86400 ;
                      ?>
                      @if ($durasi < 0   ) 
                          (Sudah Lulus ( Telah Lewat {{ $durasi  }} Hari))
                      @else
                         (Akan Lulus Pendidikan dalam {{ $durasi  }} Hari Lagi) 
                      @endif "
                          disabled readonly
                        />
                      </div>
      
            <div class="form-group mt-2">
                <label  class="form-label">Keterangan Anak</label>
                <article class="form-control">{!! $anak->ket !!}</article>
            </div>

          </div>
            </form>
      </div>
    
    <!-- /Account -->

      

  </div>
@endsection