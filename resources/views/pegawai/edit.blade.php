@extends('dashboard.index')
@section('main','active')
@section('pegawai','active')
<title>SIMPP | Edit Data PNS</title>
@section('content')



    <div class="card">
        <div class="card-header">
        <h3>Edit Data PNS : ({{ $pegawai->nama }})</h3>
        <a href="/pegawai" class="btn btn-outline-danger float-right"> <i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="col-sm-12">
                    <div class="card">
                        <form action="/pegawai/{{ $pegawai->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <div> <label >Detail 1</label></div>
                                    <hr class="dropdown-divider ">
                                    <label for="nip" >NIP</label>
                                    <input type="number" class="form-control col-6 mb-3 @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip', $pegawai->nip) }}" autofocus>
                                    @error('nip')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="nama">Nama PNS</label>
                                    <input type="text" class="form-control col-8 mb-3 @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $pegawai->nama) }}">
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
                                        <input type="text" class="form-control @error('t_lahir') is-invalid @enderror" id="t_lahir" name="t_lahir" placeholder="Masukkan Tempat Lahir" value="{{ old('t_lahir', $pegawai->t_lahir) }}">
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
                                        <input type="date" class="form-control mb-3 @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" value="{{ old('tgl_lahir', $pegawai->tgl_lahir) }}">
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
                                            <option value="Laki-laki" @if($pegawai->j_kelamin == "Laki-laki") selected @endif>Laki-Laki</option>
                                            <option value="Perempuan"@if($pegawai->j_kelamin == "Perempuan") selected @endif>Perempuan</option>
                                          </select>
                                          @error('j_kelamin')
                                          <div class="invalid-feedback">
                                          {{ $message }}
                                          </div>
                                          @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-4 mb-2">
                                      <div class="form-group">
                                        <label for="nohp">No HP</label>
                                        <input type="number" class="form-control mb-3 @error('nohp') is-invalid @enderror" id="nohp" name="nohp" value="{{ old('nohp', $pegawai->nohp) }}" placeholder="Masukkan Nomor HP">
                                        @error('nohp')
                                        <div class="invalid-feedback">
                                         {{$message}}
                                        </div>
                                        @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-4 mb-2">
                                      <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email',$pegawai->email) }}" placeholder="Masukkan Email">
                                        @error('email')
                                        <div class="invalid-feedback">
                                         {{$message}}
                                        </div>
                                        @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control col-10 mb-3 @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $pegawai->alamat) }}">
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                     {{'Alamat Wajib Diisi'}}
                                    </div>
                                    @enderror
                                  </div>

                                  <div class="row">
                                    <div class="col-sm-5 mb-2">
                                      <div class="form-group">
                                        <label for="agama" class="form-label">Agama</label>
                                          <select name="agama" class="form-control @error('agama')
                                              is-invalid
                                          @enderror" >
                                            <option selected disable value="">---Pilih Agama---</option>
                                            <option value="Islam"  @if($pegawai->agama == "Islam") selected @endif>Islam</option>
                                            <option value="Kristen" @if($pegawai->agama == "Kristen") selected @endif>Kristen</option>
                                           <option value="Hindu" @if($pegawai->agama == "Hindu") selected @endif>Hindu</option>
                                          </select>
                                          @error('agama')
                                              <div class="invalid-feedback">{{ $message }}</div>
                                          @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-4 mb-2">
                                      <div class="form-group">
                                        <label for="sts_kawin" class="form-label">Status Menikah</label>
                                        <select name="sts_kawin" class="form-control mb-3 @error('sts_kawin')
                                            is-invalid
                                        @enderror" >
                                          <option selected disabled value="">---Pilih Status---</option>
                                          <option value="Menikah" @if($pegawai->sts_kawin == "Menikah") selected @endif>Menikah</option>
                                          <option value="Belum Menikah" @if($pegawai->sts_kawin == "Belum Menikah") selected @endif>Belum Menikah</option>
                                        </select>
                                        @error('sts_kawin')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                    <div class="col-sm-5 mb-2">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label for="pendidikan">Pendidikan terakhir</label>
                                        <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan" placeholder="Masukkan Pendidikan" value="{{ old('pendidikan', $pegawai->pendidikan) }}">
                                        @error('pendidikan')
                                            <div class="invalid-feedback">
                                            {{'Pendidikan Wajib Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-2 mb-2">
                                      <div class="form-group">
                                        <label for="jumlah_anak">Jumlah Anak</label>
                                        <input type="number" class="form-control @error('jumlah_anak') is-invalid @enderror" id="jumlah_anak" name="jumlah_anak" placeholder="Masukkan Jumlah Anak" value="{{ old('jumlah_anak', $pegawai->jumlah_anak) }}">
                                        @error('jumlah_anak')
                                            <div class="invalid-feedback">
                                            {{'Jumlah Anak Wajib Diisi'}}
                                            </div>
                                         @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div> <label >Detail 2</label></div>
                                  <hr class="dropdown-divider ">

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
                                             @if (old('pangkat_id',$pegawai->pangkat_id) == $item->id_pangkat)
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
                                    <div class="col-sm-5">
                                      <!-- select -->
                                      <div class="form-group">
                                        <label for="golongan_id" class="form-label">Golongan</label>
                                        <select class="form-control @error('golongan_id') is-invalid @enderror" name="golongan_id" id="golongan_id"  >
                                          <option selected disable value="">---Pilih Golongan---</option>
                                          @foreach ($golongan as $golo)
                                              @if (old('golongan_id',$pegawai->golongan_id) == $golo->id_golongan)
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

                                  <div class="row">
                                    <div class="col-sm-5 mb-3 mt-2">
                                      <!-- select -->
                                      <div class="form-group">
                                        <label for="jabatan_id" class="form-label">Jabatan</label>
                                        <select class="form-control @error('jabatan_id')
                                            is-invalid
                                        @enderror" name="jabatan_id" >
                                          <option selected disable value="">---Pilih Jabatan---</option>
                                          @foreach ($jabatan as $jabat)
                                              @if (old('jabatan_id',$pegawai->jabatan_id) == $jabat->id_jabatan)
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
                                    
                                 <div class="col-sm-4 mb-2">
                                  <div class="form-group">
                                    <label for="sts_pegawai" class="form-label ">Status Pegawai</label>
                                    <select name="sts_pegawai" class="form-control @error('sts_pegawai')
                                    is-invalid
                                @enderror" >
                                      <option value="">---Pilih Status---</option>
                                      <option value="Aktif" @if($pegawai->sts_pegawai == "Aktif") selected @endif>Aktif</option>
                                      <option value="Tidak Aktif" @if($pegawai->sts_pegawai == "Tidak Aktif") selected @endif>Tidak Aktif</option>
                                    </select>
                                    @error('sts_pegawai')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-sm-4 mb-2">
                                  <div class="form-group">
                                    <label for="tmt">TMT</label>
                                    <input type="date" class="form-control mb-3 @error('tmt') is-invalid @enderror" id="tmt" name="tmt" placeholder="Masukkan Tanggal Lahir" value="{{ old('tmt',$pegawai->tmt) }}">
                                    @error('tmt')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                                     @enderror
                                  </div>
                                </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="pelatihan">Pelatihan Yang Diikuti</label>
                                    <input type="text" class="form-control col-4 mb-3 @error('pelatihan') is-invalid @enderror" id="pelatihan" name="pelatihan"  value="{{ old('pelatihan',$pegawai->pelatihan) }}" placeholder="Masukkan Pelatihan">
                                    @error('pelatihan')
                                    <div class="invalid-feedback">
                                  {{ $message }}
                                    </div>
                                    @enderror
                                  </div>  

                                  <div class="row">
                                    <div class="col-sm-5 mb-3">
                                      <!-- text input -->
                                      <div class="form-group">
                                        <label for="masa_kerja">Masa Kerja</label>
                                        <input type="text" class="form-control @error('masa_kerja') is-invalid @enderror" name="masa_kerja" id="masa_kerja"  placeholder="Masukkan Masa Kerja" value="{{ old('masa_kerja', $pegawai->masa_kerja) }}">
                                        @error('masa_kerja')
                                          <div class="invalid-feedback">
                                            {{ 'Masa Kerja harus Diisi' }}
                                          </div>
                                      @enderror
                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="gaji">Gaji Pokok</label>
                                        <input type="number" class="form-control  @error('gaji') is-invalid @enderror" name="gaji" id="gaji" placeholder="Masukkan Jumlah gaji Saat ini" value="{{ old('gaji', $pegawai->gaji) }}" >
                                        @error('gaji')
                                          <div class="invalid-feedback">
                                            {{ 'Gaji harus Diisi' }}
                                          </div>
                                      @enderror
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="naik_berkala">Tanggal Naik Berkala</label>
                                    <input type="date" class="form-control col-4 mb-3 @error('naik_berkala') is-invalid @enderror" id="naik_berkala" name="naik_berkala"  value="{{ old('naik_berkala', $pegawai->naik_berkala) }}">
                                    @error('naik_berkala')
                                    <div class="invalid-feedback">
                                  {{ $message }}
                                    </div>
                                    @enderror
                                  </div>  

                                  <div class="form-group">
                                    <label for="naik_pangkat">Tanggal Naik Pangkat</label>
                                    <input type="date" class="form-control col-4 mb-3 @error('naik_pangkat') is-invalid @enderror" id="naik_pangkat" name="naik_pangkat"  value="{{ old('naik_pangkat', $pegawai->naik_pangkat) }}">
                                    @error('naik_pangkat')
                                    <div class="invalid-feedback">
                                  {{ $message }}
                                    </div>
                                    @enderror
                                  </div>
                

                                  <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="hidden" name="oldFoto" value="{{ $pegawai->foto }}">
                                    @if ($pegawai->foto)
                                    <img src="{{ asset('storage/' . $pegawai->foto) }}" class="img-preview img-fluid mb-3 col-sm-2 d-block">
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
@endsection