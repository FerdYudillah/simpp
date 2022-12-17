@extends('dashboard.index')
@section('main','active')
@section('suami_istri','active')
<title>SIMPP | Tambah Data Suami/Istri PNS Satpol PP & Damkar Tapin</title>
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>Tambah Data Suami/Istri PNS Satpol PP & Damkar Tapin</h3>
        <a href="/suami_istri" class="btn btn-outline-danger float-right"> <i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-sm-12">
                    <div class="card">
                        <form action="/suami_istri" method="POST" >
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nip" class="text-success" >Nama PNS / Nama Pasangan</label>
                                    <select name="pegawai_id" id="pegawai_id" class="form-control col-4 datapns mb-4 select2 @error('pegawai_id')
                                        is-invalid
                                    @enderror"  >
                                        <option selected disable value="">--Pilih Nama PNS--</option>
                                        @foreach ($pegawai as $item)
                                        @if(old('pegawai_id') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->nama }}-{{ $item->nip }}</option>
                                        @else
                                          <option value="{{ $item->id }}">{{ $item->nama }}-{{ $item->nip }}</option>
                                          @endif
                                        @endforeach
                                      </select>
                                      @error('pegawai_id')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                      @enderror
                                </div>

                                <div class="form-group mt-3">
                                    <label for="nama_si">Nama Suami/Istri</label>
                                    <input type="text" class="form-control col-8 mb-3 @error('nama_si') is-invalid @enderror" id="nama_si" name="nama_si" value="{{ old('nama_si') }}" >
                                    @error('nama_si')
                                    <div class="invalid-feedback">
                                     {{'Nama Wajib Diisi'}}
                                    </div>
                                    @enderror
                                  </div>

                                  <div class="row">
                                    <div class="col-sm-5 mb-2">
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
                                    <div class="col-sm-4 mb-2">
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
                                        <label for="status" class="form-label">Status</label>
                                          <select name="status" class="form-control @error('status') is-invalid @enderror">
                                            <option selected disable value="">Pilih Status</option>
                                            <option value="Suami" {{ old('status') == 'Suami' ? 'selected=selected' : '' }}>Suami</option>
                                            <option value="Istri" {{ old('status') == 'Istri' ? 'selected=selected' : '' }}>Istri</option>
                                          </select>
                                          @error('status')
                                          <div class="invalid-feedback">
                                          {{ $message }}
                                          </div>
                                          @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group mt-3">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" class="form-control col-8 mb-3 @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}" >
                                    @error('pekerjaan')
                                    <div class="invalid-feedback">
                                     {{'Isi Pekerjaan Suami/Istri'}}
                                    </div>
                                    @enderror
                                  </div>

                                  <div class="row">
                                    <div class="col-sm-5 mb-2">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label for="umur">Umur</label>
                                        <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" placeholder="Masukkan Pendidikan Anak" value="{{ old('umur') }}">
                                        @error('umur')
                                            <div class="invalid-feedback">
                                            {{'Tempat Lahir Wajib Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-4 mb-2">
                                      <div class="form-group">
                                        <label for="nohp">No HP</label>
                                        <input type="number" class="form-control mb-3 @error('nohp') is-invalid @enderror" id="nohp" name="nohp" placeholder="Masukkan No HP" value="{{ old('nohp') }}" >
                                        @error('nohp')
                                            <div class="invalid-feedback">
                                            {{'Isi Nomor HP'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-5 mb-2">
                                        <div class="form-group">
                                          <label for="sts_tunjangan" class="form-label">Status Tunjangan</label>
                                            <select name="sts_tunjangan" class="form-control @error('sts_tunjangan') is-invalid @enderror" >
                                              <option selected disable value="">---Pilih Status---</option>
                                              <option value="Ya" {{ old('sts_tunjangan') == 'Ya' ? 'selected=selected' : '' }}>Ya</option>
                                              <option value="Tidak" {{ old('sts_tunjangan') == 'Tidak' ? 'selected=selected' : '' }}>Tidak</option>
                                            </select>
                                            @error('sts_tunjangan')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                      </div>
                                  </div>

                                  <div class="form-group mt-3">
                                    <label for="ket" class="text">Keterangan</label>
                                    @error('ket')
                                        <p class="text-danger">{{ 'Isikan Keterangan' }}</p>
                                    @enderror
                                    <input id="ket" type="hidden" name="ket" value="{{ old('ket') }}">
                                    <trix-editor input="ket"></trix-editor>
                                  </div>
                                 
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

<script>
  document.addEventListener('trix-file-accept' , function(e){
  e.preventDefault();
      })
 </script>

@endsection