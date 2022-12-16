@extends('dashboard.index')
@section('main','active')
@section('suami_istri','active')
<title>SIMPP | Profil Suami/Istri </title>
@section('content')
<div class="card mb-4">
    <h5 class="card-header ">Profile Suami/Istri</h5>
    <!-- Account -->
    <div class="card-body">
        <div class="button-wrapper">
          @can('admin')
          <a href="/suami_istri/{{ $suami_istri->id }}/edit" class="btn btn-warning me-2 mb-4"  tabindex="0">Edit Data</a>
          @endcan
          <button type="button" class="btn btn-outline-secondary mb-4" >
            <i class="bx bx-reset d-block d-sm-none"></i>
            <a href="/suami_istri" >Kembali</a>
            {{-- <span class="d-none d-sm-block">Kembali </span> --}}
          </button>
        </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
        <form id="formAccountSettings" >
          <div class="row">
            <div class="form-group">
                <div class="mb-3 col-md-6">
                    <span class="badge bg-dark mb-2">Nama PNS / Pasangan</span>
                  {{-- <label for="pegawai_id" class="form-label">Nama PNS / Orang Tua Anak</label> --}}
                  <input
                    class="form-control"
                    type="text"
                    value="{{ $suami_istri->pegawai->nama }} - NIP : {{ $suami_istri->pegawai->nip }}"
                    disabled readonly
                  />
                </div>
            </div>
          
            <div class="mb-3 col-md-6">
              <label for="lastName" class="form-label text-dark">Nama Suami/Istri</label>
              <input class="form-control" type="text"  value="{{ $suami_istri->nama_si }}" disabled readonly/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="organization" class="form-label">Jenis Kelamin</label>
              <input
                type="text"
                class="form-control "
                value="{{ $suami_istri->j_kelamin }}"
                disabled readonly
              />
            </div>
            <div class="mb-3 mt-2 col-md-6">
                <span class="badge bg-dark mb-2">Status</span>
              <div class="input-group input-group-merge">
                <input
                  type="text"
                  class="form-control"
                  value="{{ $suami_istri->status }}"
                  disabled readonly
                />
              </div>
            </div>
            <div class="mb-3 mt-2 col-md-6">
              <span class="badge bg-dark mb-2">Tempat,Tanggal lahir</span>
            <div class="input-group input-group-merge">
              <input
                type="text"
                class="form-control"
                value="{{ $suami_istri->t_lahir }}, {{ $suami_istri->tgl_lahir }}"
                disabled readonly
              />
            </div>
          </div>

                    <div class="mb-3 col-md-6 mt-2">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control"  value="{{ $suami_istri->pekerjaan }}"   disabled readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label  class="form-label">Umur</label>
                        <input class="form-control" type="text" value="{{ $suami_istri->umur }}"   disabled readonly />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label class="form-label">No HP</label>
                        <input
                          type="text"
                          class="form-control"
                          value="{{ $suami_istri->nohp }}"
                          disabled readonly
                        />
                      </div>
                      <div class="mb-3 col-md-6">
                        <span class="badge bg-dark mb-2">Status Tunjangan</span>
                        <input class="form-control" type="text" value="{{ $suami_istri->sts_tunjangan }}"   disabled readonly />
                      </div>
                      </div>
      
                      <div class="form-group mt-2">
                        <label  class="form-label">Keterangan</label>
                        <article class="form-control">{!! $suami_istri->ket !!}</article>
                    </div>
          </div>
            </form>
      </div>
    
    <!-- /Account -->

      

  </div>
@endsection