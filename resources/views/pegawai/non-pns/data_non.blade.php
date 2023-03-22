@extends('dashboard.index')
@section('main','active')
@section('non_pns','active')
<title>SIMPP | Data Non PNS Satpol PP & Damkar</title>

@section('content')
@if (session()->has('delete'))
<div class="alert alert-danger col-lg-3" role="alert">
    {{ session('delete') }}
  </div>
  @endif

  <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Data Non PNS Satpol PP & Damkar Tapin <i class="bx bx-user"></i></h5>
            <div class="card-body">
              <form action="/non_pns" method="GET">
                <div class="row">
                  <div class="col-12 col-sm-2">
                    @can('admin')
                    <a href="/non_pns/create" class="btn btn-info">Tambah Data</a>
                    @endcan
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="btn-group" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bxs-printer'></i>
                        Cetak
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="/exportNon" target="_blank">PDF <i class='bx bxs-file-pdf' ></i></a></li>
                        <li><a class="dropdown-item" href="{{ route('export.excel') }}" target="_blank">Excel <i class='bx bx-file'></i></a></li>
                      </ul>
                    </div>
                  </div>
               <div class="col-12 col-sm-4">
                <div class="input-group">
                  <input type="text" name="cari" id="cari" class="form-control" value="{{ $cari }}">
                  <button type="submit" class="btn btn-danger btn-sm ">Cari</button>
                </div>
               </div>
                </div>
              </form>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-sm ">
                        <thead class="text-center">
                          <tr class="text-nowrap">
                            <th>No</th>
                            <th>Foto</th>
                            <th>@sortablelink('nama','Nama')</th>
                            <th>@sortablelink('nitp','NITP')</th>
                            <th>@sortablelink('tgl_lahir','tempat,Tanggal lahir')</th>
                            <th>@sortablelink('j_kelamin','J.kelamin')</th>
                            <th>@sortablelink('awal_kerja','Awal Bekerja')</th>
                            <th>Pendidikan Awal</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Jabatan</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @php $no= $nonPegawai->firstItem(); @endphp
                          @forelse ($nonPegawai as $non)
                          <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>
                              @if ($non->foto)
                          <img style="max-width: 80px;max-height:80px" src="{{ asset('storage/' . $non->foto) }}" alt="{{ $non->name }}" class="img-fluid">
                    @endif
                            </td>
                            <td>{{ $non->nama }}</td>
                            <td>{{ $non->nitp }}</td>
                            <td>{{ $non->t_lahir }},{{ $non->tgl_lahir }}</td>
                            <td>{{ $non->j_kelamin }}</td>
                            <td>{{ $non->awal_kerja }}</td>
                            <td>{{ $non->pend_awal }}</td>
                            <td>{{ $non->pend_akhir }}</td>
                            <td>{{ $non->jabatan->nama_jabatan }}</td>
                        <td>
                          <a href="/non_pns/{{ $non->id }}" class="btn btn-success btn-sm"> <i class="bx bx-search"></i></a>
                          @can('admin')
                         <a href="/non_pns/{{ $non->id }}/edit" class="btn btn-warning btn-sm">  <i class="bx bx-edit"></i></a>
                         <form onsubmit="return confirm('Yakin Mau Hapus Data??')" action="/non_pns/{{ $non->id }}" method="POST" class="d-inline">
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
                {{ $nonPegawai->links() }}
            </div>
        </div>
    </div>
  </div>
@endsection
