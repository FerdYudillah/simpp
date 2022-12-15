@extends('dashboard.index')
@section('dm','active')
@section('jabatan','active')
<title>SIMPP | Tambah Data Jabatan</title>
@section('content')
    <div class="mb-3">
        <a href="/jabatan" class="btn btn-success">Kembali</a>
    </div>
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0 text-success">Tambah Data Golongan <i class="bx bx-tag"></i
                    ></h5>
              </div>
              <div class="card-body">
                <form method="POST" action="/jabatan">
                    @csrf
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="nama_jabatan">Nama Jabatan</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="nama_jabatan" class="input-group-text"
                          ><i class="bx bx-tag"> :</i
                        ></span>
                        <input
                          type="text"
                          class="form-control @error('nama_jabatan')
                              is-invalid
                          @enderror"
                          id="nama_jabatan"
                          name="nama_jabatan"
                          value="{{ old('nama_jabatan') }}"
                        />
                        @error('nama_jabatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-end">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection