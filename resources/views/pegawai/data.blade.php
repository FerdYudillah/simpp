@extends('dashboard.index')
@section('main','active')
@section('pegawai','active')
<title>SIMPP | Data PNS Satpol PP & Damkar</title>
@section('content')



@if (session()->has('delete'))
<div class="alert alert-danger col-lg-3" role="alert">
  {{ session('delete') }}
</div>
@endif

<div class="row justify-content-center">
  <div class="col-md-12">
      <div class="card">
          <h5 class="card-header">Data PNS Satpol PP & Damkar Tapin<i class="bx bx-user"></i></h5>
          <div class="card-body">
            <form action="/pegawai" method="GET">
              <div class="row">
                <div class="col-12 col-sm-2">
                  @can('admin')
                  <a href="/pegawai/create" class="btn btn-success">Tambah Data</a>
                  @endcan
                </div>
                <div class="col-12 col-sm-6">
                  <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bxs-printer'></i>
                      Cetak 
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <li><a class="dropdown-item" href="/exportpdf" target="_blank">PDF <i class='bx bxs-file-pdf' ></i></a></li>
                    </ul>
                  </div>
                </div>
             <div class="col-12 col-sm-4">
              <div class="input-group">
                <input type="text" name="cari" id="cari" class="form-control" value="{{ $cari }}">
                <button type="submit" class="btn btn-info btn-sm ">Cari</button>
              </div>
             </div>
              </div>
            </form>
              <div class="table-responsive">
                  <table class="table table-hover table-bordered table-sm ">
                      <thead class="text-center ">
                        <tr class="text-nowrap">
                          <th>No</th>
                          <th>Foto</th>
                          <th>@sortablelink('nip','NIP')</th>
                          <th>@sortablelink('nama', 'Nama')</th>
                          <th>@sortablelink('j_kelamin', 'J.Kelamin')</th>
                          <th>@sortablelink('pangkat_id', 'Pangkat')</th>
                          <th>@sortablelink('golongan_id', 'Gol.Ruang')</th>
                          <th>@sortablelink('jabatan_id','Jabatan')</th>
                          <th>@sortablelink('masa_kerja','Masa Kerja')</th>
                          <th>@sortablelink('gaji', 'Gaji')</th>
                          <th>@sortablelink('tmt', 'Tanggal TMT')</th>
                          <th>@sortablelink('pelatihan', 'Pelatihan/Diklat')</th>
                          <th class="bg-warning text-white">@sortablelink('naik_berkala','Tanggal naik Berkala')</th>
                          <th class="bg-success text-white">@sortablelink('naik_pangkat', 'Tanggal naik Pangkat')</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no= $pegawai->firstItem(); @endphp
                          @forelse ($pegawai as $peg)
                          <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>
                              @if ($peg->foto)
                          <img style="max-width: 80px;max-height:80px" src="{{ asset('storage/' . $peg->foto) }}" alt="{{ $peg->name }}" class="img-fluid">
                    @endif
                            </td>
                            <td>{{ $peg->nip }}</td>
                        <td>{{ $peg->nama }}</td>
                        <td>{{ $peg->j_kelamin }}</td>
                        <td>{{ $peg->pangkat->nama_pangkat }}</td>
                        <td>{{ $peg->golongan->nama_golongan }}</td>
                        <td>{{ $peg->jabatan->nama_jabatan }}</td>
                        <td>{{ $peg->masa_kerja }}</td>
                        <td>{{ formatRupiah($peg->gaji) }}</td>
                        <td>{{ $peg->tmt }}</td>
                        <td>{{ $peg->pelatihan }}</td>
                        <td>{{ $peg->naik_berkala }}
                          <?php 
                          $datetime2 = strtotime($peg->naik_berkala) ;
                          $datenow = strtotime(date("Y-m-d"));
                          $durasi = ($datetime2 - $datenow) / 86400 ;
                      ?>
                      @if ($durasi < 0   ) 
                          (Kenaikan Terlambat / {{ $durasi  }} Hari)
                      @else
                         (Waktu Kenaikan Tinggal {{ $durasi  }} Hari Lagi) 
                      @endif
                        </td>
                        <td>{{ $peg->naik_pangkat }}
                        <?php 
                          $datetime2 = strtotime($peg->naik_pangkat) ;
                          $datenow = strtotime(date("Y-m-d"));
                          $durasi = ($datetime2 - $datenow) / 86400 ;
                      ?>
                      @if ($durasi < 0   ) 
                          (Kenaikan Terlambat / {{ $durasi  }} Hari)
                      @else
                         (Waktu Kenaikan Tinggal {{ $durasi  }} Hari Lagi) 
                      @endif
                        </td>
                        <td>
                          <a href="/pegawai/{{ $peg->id }}" class="btn btn-success btn-sm"> <i class="bx bx-search"></i></a>
                          @can('admin')
                         <a href="/pegawai/{{ $peg->id }}/edit" class="btn btn-warning btn-sm">  <i class="bx bx-edit"></i></a>
                         <form onsubmit="return confirm('Yakin Mau Hapus Data??')" action="/pegawai/{{ $peg->id }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm" type="submit"><i class="bx bx-trash"></i></button>
                        </form>
                        @endcan
                        </td> 
                          </tr>
                          @empty
                              <td colspan="4">Data Tidak Ada</td>
                          @endforelse
                      </tbody>
                  </table>
              </div>
              {{ $pegawai->links() }}
          </div>
      </div>
  </div>
</div>
@endsection