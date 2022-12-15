@extends('dashboard.index')
@section('dm','active')
@section('golongan','active')
<title>SIMPP | Tambah Data Golongan</title>
@section('content')
    <div class="mb-3">
        <a href="/golongan" class="btn btn-warning">Kembali</a>
    </div>
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0 text-warning">Tambah Data Golongan <i class="bx bx-file"></i
                    ></h5>
              </div>
              <div class="card-body">
                <form method="POST" action="/golongan">
                    @csrf
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="nama_golongan">Nama Golongan</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="nama_golongan" class="input-group-text"
                          ><i class="bx bx-file"> :</i
                        ></span>
                        <input
                          type="text"
                          class="form-control @error('nama_golongan')
                              is-invalid
                          @enderror"
                          id="nama_golongan"
                          name="nama_golongan"
                          value="{{ old('nama_golongan') }}"
                        />
                        @error('nama_golongan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-end">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-warning">Simpan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection