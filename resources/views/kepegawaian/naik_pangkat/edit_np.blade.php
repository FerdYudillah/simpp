@extends('dashboard.index')
@section('kp','active')
@section('naik_pangkat','active')
<title>SIMPP | Eit Data Kenaikan Pangkat PNS Satpol PP & Damkar Tapin</title>
@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="text-success">Edit Data ({{ $naikPangkat->pegawai->nama }}) Yang Akan Menerima Kenaikan Pangkat</h3>
        <a href="/naik_pangkat" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-sm-12">
                    <div class="card">
                        <form action="/naik_pangkat/{{ $naikPangkat->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group mb-4">
                                    <label for="nip" class="text-success" >Nama PNS </label>
                                    <select name="pegawai_id" id="pegawai_id" class="form-control col-4 datapns mb-4 select2 @error('pegawai_id')
                                        is-invalid
                                    @enderror" >
                                        <option selected disable value="">--Pilih Nama PNS--</option>
                                        @foreach ($pegawai as $item)
                                        @if(old('pegawai_id', $naikPangkat->pegawai_id) == $item->id)
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

                                 <div class="row mt-3 mb-3 ">
                                    <div class="col-sm-5 mt-4">
                                      <!-- select -->
                                      <div class="form-group">
                                        <label for="pangkat_id" class="form-label ">Pangkat Lama</label>
                                        <select name="pangkat_id"  class="form-control @error('pangkat_id')
                                        is-invalid
                                    @enderror" >
                                            <option value="">---Pilih Pangkat---</option>
                                            @foreach ($pangkat as $item)
                                             @if (old('pangkat_id',$naikPangkat->pangkat_id) == $item->id_pangkat)
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
                                    <div class="col-sm-5 mt-4">
                                      <!-- select -->
                                      <div class="form-group">
                                        <label for="golongan_id" class="form-label">Golongan</label>
                                        <select class="form-control @error('golongan_id') is-invalid @enderror" name="golongan_id" id="golongan_id"  >
                                          <option selected disable value="">---Pilih Golongan---</option>
                                          @foreach ($golongan as $golo)
                                              @if (old('golongan_id', $naikPangkat->golongan_id) == $golo->id_golongan)
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
                                            @if (old('jabatan_id',$naikPangkat->jabatan_id) == $jabat->id_jabatan)
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
                                  
                                  <div class="form-group mt-4">
                                    <label for="pangkat_baru" class="form-label ">Pangkat Baru</label>
                                    <input type="text" name="pangkat_baru" id="pangkat_baru" class="form-control @error('pangkat_baru')
                                      is-invalid
                                    @enderror" placeholder="Masukkan Pangkat Baru" value="{{ old('pangkat_baru',$naikPangkat->pangkat_baru) }}">
                                    @error('pangkat_baru')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                  </div>                            
                                 
                                  <div class="col-sm-5 mt-4">
                                    <!-- select -->
                                    <div class="form-group">
                                      <label for="mulai_tanggal" class="form-label">Tanggal Mulai</label>
                                      <div class="col-sm-10">
                                        <input type="date" class="form-control col-3  @error('mulai_tanggal') is-invalid @enderror" id="mulai_tanggal" name="mulai_tanggal" value="{{ old('mulai_tanggal',$naikPangkat->mulai_tanggal) }}">
                                        @error('mulai_tanggal')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                                        @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="hidden" name="oldFoto" value="{{ $naikPangkat->foto }}">
                                    @if ($naikPangkat->foto)
                                    <img src="{{ asset('storage/' . $naikPangkat->foto) }}" class="img-preview img-fluid mb-3 col-sm-2 d-block">
                                    @else
                                    <img class="img-preview img-fluid mb-3 col-sm-2">
                                    @endif
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
                                    <input id="ket" type="hidden" name="ket" value="{{ old('ket',$naikPangkat) }}">
                                    <trix-editor input="ket"></trix-editor>
                                  </div>
                                 
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
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