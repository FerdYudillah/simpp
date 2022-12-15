@extends('dashboard.index')
@section('main','active')
@section('non_pns','active')
<title>SIMPP | Tambah Data Non PNS</title>
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>Tambah Data Non PNS</h3>
        <a href="/non_pns" class="btn btn-outline-danger float-right"> <i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-sm-12">
                    <div class="card">
                        <form action="/non_pns" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control col-8 mb-4 @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ old('nama') }}" autofocus required>
                                    @error('nama')
                                    <div class="invalid-feedback">
                                     {{'Nama Wajib Diisi'}}
                                    </div>
                                    @enderror
                                  </div>

                                  <div class="form-group">
                                    <label for="nitp" >NITP</label>
                                    <input type="number" class="form-control col-6 mb-4 @error('nitp') is-invalid @enderror" id="nitp" name="nitp" placeholder="Masukkan NITP" value="{{ old('nitp') }}" >
                                    @error('nitp')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                  <div class="row">
                                    <div class="col-sm-5 mb-3">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label for="t_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control @error('t_lahir') is-invalid @enderror" id="t_lahir" name="t_lahir" placeholder="Masukkan Tempat Lahir" value="{{ old('t_lahir') }}">
                                        @error('t_lahir')
                                            <div class="invalid-feedback">
                                            {{'Tempat Lahir Wajib Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                      <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control mb-3 @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" value="{{ old('tgl_lahir') }}">
                                        @error('tgl_lahir')
                                            <div class="invalid-feedback">
                                            {{'Tanggal Lahir Wajib Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-sm-5 mb-2">
                                      <div class="form-group">
                                        <label for="j_kelamin" class="form-label">Jenis Kelamin</label>
                                          <select name="j_kelamin" class="form-control @error('j_kelamin') is-invalid @enderror">
                                            <option selected disable value="">---Pilih Jenis Kelamin---</option>
                                            <option value="Laki-laki" {{ old('j_kelamin') == 'Laki-laki' ? 'selected=selected' : '' }}>Laki-Laki</option>
                                            <option value="Perempuan" {{ old('j_kelamin') == 'Perempuan' ? 'selected=selected' : '' }}>Perempuan</option>
                                          </select>
                                          @error('j_kelamin')
                                          <div class="invalid-feedback">
                                          {{ $message }}
                                          </div>
                                          @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-5 mb-2">
                                      <div class="form-group">
                                        <label for="agama" class="form-label">Agama</label>
                                          <select name="agama" class="form-control @error('agama')
                                              is-invalid
                                          @enderror" >
                                            <option selected disable value="">---Pilih Agama---</option>
                                            <option value="Islam" {{ old('agama') == 'Islam' ? 'selected=selected' : '' }}>Islam</option>
                                            <option value="Kristen"{{ old('agama') == 'Kristen' ? 'selected=selected' : '' }}>Kristen</option>
                                            <option value="Hindu"{{ old('agama') == 'Hindu' ? 'selected=selected' : '' }}>Hindu</option>
                      
                                          </select>
                                          @error('agama')
                                              <div class="invalid-feedback">{{ $message }}</div>
                                          @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-sm-4 mb-2 mt-3">
                                      <div class="form-group">
                                        <label for="awal_kerja">Tanggal Awal bekerja</label>
                                        <input type="date" class="form-control mb-3 @error('awal_kerja') is-invalid @enderror" id="awal_kerja" name="awal_kerja" value="{{ old('awal_kerja') }}" placeholder="Masukkan tanggal Awal Kerja">
                                        @error('awal_kerja')
                                        <div class="invalid-feedback">
                                         {{$message}}
                                        </div>
                                        @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                    <div class="col-sm-5 mb-2">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label for="pend_awal	">Pendidikan Awal</label>
                                        <input type="text" class="form-control @error('pend_awal') is-invalid @enderror" id="pend_awal" name="pend_awal" placeholder="Masukkan Pendidikan" value="{{ old('pend_awal') }}">
                                        @error('pend_awal')
                                            <div class="invalid-feedback">
                                            {{'Pendidikan Awal Wajib Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-5 mb-2">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label for="pend_akhir">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control @error('pend_akhir') is-invalid @enderror" id="pend_akhir" name="pend_akhir" placeholder="Masukkan Pendidikan" value="{{ old('pend_akhir') }}">
                                        @error('pend_akhir')
                                            <div class="invalid-feedback">
                                            {{'Pendidikan Akhir Wajib Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-sm-5 mb-4 mt-2">
                                      <!-- select -->
                                      <div class="form-group">
                                        <label for="jabatan_id" class="form-label">Jabatan</label>
                                        <select class="form-control @error('jabatan_id')
                                            is-invalid
                                        @enderror" name="jabatan_id" >
                                          <option selected disable value="">---Pilih Jabatan---</option>
                                          @foreach ($jabatan as $jabat)
                                              @if (old('jabatan_id') == $jabat->id_jabatan)
                                              <option value="{{ $jabat->id_jabatan }}" selected>{{ $jabat->nama_jabatan }}</option>
                                              @else
                                              <option value="{{ $jabat->id_jabatan }}">{{ $jabat->nama_jabatan }}</option>   
                                              @endif
                                          @endforeach
                                        </select>
                                        @error('jabatan_id')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                 @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control col-10 mb-3 @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="{{ old('alamat') }}">
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                     {{'Alamat Wajib Diisi'}}
                                    </div>
                                    @enderror
                                  </div>

                                  <div class="row">
                                    <div class="col-sm-4 mb-2">
                                      <div class="form-group">
                                        <label for="nohp">No HP</label>
                                        <input type="number" class="form-control mb-3 @error('nohp') is-invalid @enderror" id="nohp" name="nohp" value="{{ old('nohp') }}" placeholder="Masukkan Nomor HP">
                                        @error('nohp')
                                        <div class="invalid-feedback">
                                         {{$message}}
                                        </div>
                                        @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group mt-2">
                                    <label for="foto">Foto</label>
                                    <img class="img-preview img-fluid mb-3 col-sm-2">
                                    <input type="file" class="form-control col-4 @error('foto') is-invalid @enderror" id="foto" name="foto"  onchange="previewImage()" accept="image/*" >
                                    @error('foto')
                                    <div class="invalid-feedback">
                                     {{ $message }}
                                    </div>
                                    @enderror
                                  </div>

                                  <div class="form-group mt-4">
                                    <label for="ket" >Keterangan</label>
                                    @error('ket')
                                        <p class="text-danger">{{ 'Isikan Keterangan' }}</p>
                                    @enderror
                                    <input id="ket" type="hidden" name="ket" value="{{ old('ket') }}">
                                    <trix-editor input="ket"></trix-editor>
                                  </div>                                 
                                  
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger">Simpan</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection