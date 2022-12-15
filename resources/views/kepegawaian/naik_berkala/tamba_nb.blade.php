@extends('dashboard.index')
@section('kp','active')
@section('naik_berkala','active')
<title>SIMPP | Tambah Data Kenaikan Gaji Berkala PNS Satpol PP & Damkar Tapin</title>
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>Masukkan Data PNS  Yang Akan Menerima Kenaikan Gaji Berkala</h3>
        <a href="/naik_berkala" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-sm-12">
                    <div class="card">
                        <form action="/naik_berkala" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group mb-4">
                                    <label for="nip" class="text-success" >Nama PNS </label>
                                    <select name="pegawai_id" id="pegawai_id" class="form-control col-4 datapns mb-4 select2 @error('pegawai_id')
                                        is-invalid
                                    @enderror" >
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

                                <div class="row">
                                    <div class="col-sm-5 mb-2">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label for="t_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control @error('t_lahir') is-invalid @enderror" id="t_lahir" name="t_lahir" placeholder="Masukkan Tempat Lahir" value="{{ old('t_lahir') }}" >
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

                                  <div class="row mt-3 mb-3">
                                    <div class="col-sm-5">
                                      <!-- select -->
                                      <div class="form-group">
                                        <label for="pangkat_id" class="form-label ">Pangkat</label>
                                        <select name="pangkat_id"  class="form-control @error('pangkat_id')
                                        is-invalid
                                    @enderror" >
                                            <option value="">---Pilih Pangkat---</option>
                                            @foreach ($pangkat as $item)
                                             @if (old('pangkat_id') == $item->id_pangkat)
                                             <option value="{{ $item->id_pangkat }}" selected>{{ $item->nama_pangkat }}</option>
                                             @else
                                             <option value="{{ $item->id_pangkat }}">{{ $item->nama_pangkat }}</option>
                                             @endif   
                                            @endforeach
                                        </select>
                                        @error('pangkat_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-5 ">
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

                                  <div class="row mt-4">
                                    <div class="col-sm-5 mb-2">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label for="gaji_lama">Gaji Lama</label>
                                        <input type="number" class="form-control @error('gaji_lama') is-invalid @enderror" id="gaji_lama" name="gaji_lama" placeholder="Masukkan Gaji Lama" value="{{ old('gaji_lama') }}">
                                        @error('gaji_lama')
                                            <div class="invalid-feedback">
                                            {{'Gaji Laman Harus Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-4 mb-2">
                                      <div class="form-group">
                                        <label for="gaji_baru">Gaji Baru</label>
                                        <input type="number" class="form-control mb-3 @error('gaji_baru') is-invalid @enderror" id="gaji_baru" name="gaji_baru" placeholder="Masukkan Gaji baru" value="{{ old('gaji_baru') }}" >
                                        @error('gaji_baru')
                                            <div class="invalid-feedback">
                                            {{'Gaji Baru Harus Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-5 mb-2">
                                        <div class="form-group">
                                          <label for="masa_kerja" class="form-label">Masa Kerja</label>
                                          <input type="text" class="form-control @error('masa_kerja') is-invalid @enderror" name="masa_kerja" id="masa_kerja"  placeholder="Masukkan Masa Kerja" value="{{ old('masa_kerja') }}">
                                          @error('masa_kerja')
                                            <div class="invalid-feedback">
                                              {{ 'Masa Kerja harus Diisi' }}
                                            </div>
                                        @enderror
                                        </div>
                                      </div>
                                  </div>

                                  
                                  <div class="col-sm-5 mt-4">
                                    <!-- select -->
                                    <div class="form-group">
                                      <label for="golongan_id" class="form-label">Golongan</label>
                                      <select class="form-control @error('golongan_id') is-invalid @enderror" name="golongan_id" id="golongan_id"  >
                                        <option selected disable value="">---Pilih Golongan---</option>
                                        @foreach ($golongan as $golo)
                                            @if (old('golongan_id') == $golo->id_golongan)
                                            <option value="{{ $golo->id_golongan }}" selected>{{ $golo->nama_golongan }}</option>  
                                            @else
                                            <option value="{{ $golo->id_golongan }}">{{ $golo->nama_golongan }}</option>
                                            @endif
                                        @endforeach
                                      </select>
                                      @error('golongan_id')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                       @enderror
                                    </div>
                                  </div>

                                  <div class="col-sm-5 mt-4">
                                    <!-- select -->
                                    <div class="form-group">
                                      <label for="mulai_tgl" class="form-label">Tanggal Mulai</label>
                                      <div class="col-sm-10">
                                        <input type="date" class="form-control col-3  @error('mulai_tgl') is-invalid @enderror" id="mulai_tgl" name="mulai_tgl" value="{{ old('mulai_tgl') }}">
                                        @error('mulai_tgl')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                                        @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group mt-4">
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
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
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