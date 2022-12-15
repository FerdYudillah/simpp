@extends('dashboard.index')
@section('main','active')
@section('anak','active')
<title>SIMPP | Edit Data Anak PNS</title>
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>Edit Data Anak PNS : ({{ $anak->nama }})</h3>
        <a href="/anak" class="btn btn-outline-danger float-right"> <i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-sm-12">
                    <div class="card">
                        <form action="/anak/{{ $anak->id }}" method="POST" >
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nip" class="text-success" >Nama PNS / Orang Tua Anak</label>
                                    <select name="pegawai_id" id="pegawai_id" class="form-control col-4 datapns mb-4 select2 @error('pegawai_id')
                                        is-invalid
                                    @enderror" >
                                        <option selected disable value="">--Pilih Nama PNS--</option>
                                        @foreach ($pegawai as $item)
                                        @if(old('pegawai_id',$anak->pegawai_id) == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                        @else
                                          <option value="{{ $item->id }}">{{ $item->nama }}</option>
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
                                    <label for="nama">Nama Anak</label>
                                    <input type="text" class="form-control col-8 mb-3 @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $anak->nama) }}">
                                    @error('nama')
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
                                        <input type="text" class="form-control @error('t_lahir') is-invalid @enderror" id="t_lahir" name="t_lahir" placeholder="Masukkan Tempat Lahir" value="{{ old('t_lahir',$anak->t_lahir) }}">
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
                                        <input type="date" class="form-control mb-3 @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" value="{{ old('tgl_lahir',$anak->tgl_lahir) }}">
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
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                          <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                            <option selected disable value="">---Pilih Jenis Kelamin---</option>
                                            <option value="Laki-laki" @if($anak->jenis_kelamin == "Laki-laki") selected @endif>Laki-laki</option>
                                        <option value="Perempuan" @if($anak->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                                          </select>
                                          @error('jenis_kelamin')
                                          <div class="invalid-feedback">
                                          {{ $message }}
                                          </div>
                                          @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-4 mb-2">
                                      <div class="form-group">
                                        <label for="status">Status Anak</label>
                                        <input type="text" class="form-control mb-3 @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status', $anak->status) }}" placeholder="Status Anak">
                                        @error('status')
                                        <div class="invalid-feedback">
                                         {{$message}}
                                        </div>
                                        @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-sm-5 mb-2">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label for="umur">Umur Anak</label>
                                        <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" placeholder="Masukkan Umur Anak" value="{{ old('umur', $anak->umur) }}">
                                        @error('umur')
                                            <div class="invalid-feedback">
                                            {{'Tempat Lahir Wajib Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-4 mb-2">
                                      <div class="form-group">
                                        <label for="tgl_umur_21">Umur Anak Akan Berumur 21 (optional)</label>
                                        <input type="date" class="form-control mb-3 @error('tgl_umur_21') is-invalid @enderror" id="tgl_umur_21" name="tgl_umur_21" placeholder="Masukkan Tanggal Lahir" value="{{ old('tgl_umur_21', $anak->tgl_umur_21) }}">
                                        @error('tgl_umur_21')
                                            <div class="invalid-feedback">
                                            {{$message}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-sm-5 mb-2">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label for="pendidikan">Pendidikan Anak</label>
                                        <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan" placeholder="Masukkan Pendidikan Anak" value="{{ old('pendidikan', $anak->pendidikan) }}">
                                        @error('pendidikan')
                                            <div class="invalid-feedback">
                                            {{'Tempat Lahir Wajib Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-4 mb-2">
                                      <div class="form-group">
                                        <label for="tgl_lulus_sekolah">Tanggal Lulus Pendidikan (optional)</label>
                                        <input type="date" class="form-control mb-3 @error('tgl_lulus_sekolah') is-invalid @enderror" id="tgl_lulus_sekolah" name="tgl_lulus_sekolah" placeholder="Masukkan Tanggal Lahir" value="{{ old('tgl_lulus_sekolah', $anak->tgl_lulus_sekolah) }}">
                                        @error('tgl_lulus_sekolah')
                                            <div class="invalid-feedback">
                                            {{'Tanggal Lahir Wajib Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-sm-5 mb-2">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label for="tunjangan">Status Tunjangan</label>
                                        <select name="tunjangan" class="form-control col-4 @error('tunjangan')
                                            is-invalid
                                        @enderror" >
                                            <option selected disable value="">---Pilih Status Tunjangan---</option>
                                            <option value="Ya" @if($anak->tunjangan == "Ya") selected @endif>Ya</option>
                                             <option value="Tidak" @if($anak->tunjangan == "Tidak") selected @endif>Tidak</option>
                                          </select>
                                        @error('tunjangan')
                                            <div class="invalid-feedback">
                                            {{'Tempat Lahir Wajib Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-4 mb-2">
                                      <div class="form-group mb-3">
                                        <label for="sts_nikah" class="text-success">Status Menikah</label>
                                        <select name="sts_nikah" class="form-control col-4 @error('sts_nikah')
                                            is-invalid
                                        @enderror" required>
                                            <option selected disable value="">---Pilih Status Menikah---</option>
                                            <option value="Menikah" @if($anak->sts_nikah == "Menikah") selected @endif>Menikah</option>
                                            <option value="Belum Menikah" @if($anak->sts_nikah == "Belum Menikah") selected @endif>Belum Menikah</option>
                                          </select>
                                            @error('sts_nikah')
                                            <div class="invalid-feedback">
                                            {{'Tanggal Lahir Wajib Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                  </div>

                                  
                                  <div class="form-group">
                                    <label for="ket" class="text-success">Keterangan Anak</label>
                                    @error('ket')
                                        <p class="text-danger">{{ 'Isikan Keterangan' }}</p>
                                    @enderror
                                    <input id="ket" type="hidden" name="ket" value="{{ old('ket',$anak->ket) }}">
                                    <trix-editor input="ket"></trix-editor>
                                  </div>
                                     
                                 
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger">Update</button>
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