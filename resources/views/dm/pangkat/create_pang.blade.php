@extends('dashboard.index')
@section('dm','active')
@section('pangkat','active')
<title>SIMPP | Tambah Data Pangkat </title>
@section('content')
    <div class="mb-3">
        <a href="/pangkat" class="btn btn-primary">Kembali</a>
    </div>
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0 text-primary">Tambah Data pangkat <i class="bx bx-user"></i
                    ></h5>
              </div>
              <div class="card-body">
                <form method="POST" action="/pangkat">
                    @csrf
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="nama_pangkat">Nama Pangkat</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="nama_pangkat" class="input-group-text"
                          ><i class="bx bx-user"> :</i
                        ></span>
                        <input
                          type="text"
                          class="form-control @error('nama_pangkat')
                              is-invalid
                          @enderror"
                          id="nama_pangkat"
                          name="nama_pangkat"
                          value="{{ old('nama_pangkat') }}"
                        />
                        @error('nama_pangkat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-end">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection