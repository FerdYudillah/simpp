@extends('dashboard.index')
@section('main','active')
@section('suami_istri','active')
<title>SIMPP | Data Suami/Istri PNS Satpol PP & Damkar Tapin</title>
@section('content')


@if (session()->has('delete'))
<div class="alert alert-danger col-lg-3" role="alert">
  {{ session('delete') }}
</div>
@endif

<div class="row justify-content-center">
  <div class="col-md-12">
      <div class="card">
          <h5 class="card-header text-info">Data Suami/Istri PNS Satpol PP & Damkar <i class="bx bx-user"></i></h5>
          <div class="card-body">
            <form action="/suami_istri" method="GET">
              <div class="row">
                <div class="col-12 col-sm-2">
                  @can('admin')
                  <a href="/suami_istri/create" class="btn btn-info">Tambah Data</a>
                  @endcan
                </div>
                <div class="col-12 col-sm-6">
                  <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bxs-printer'></i>
                      Cetak 
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <li><a class="dropdown-item" href="/exportsi" target="_blank">PDF <i class='bx bxs-file-pdf' ></i></a></li>
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
                  <table class="table table-hover table-bordered table-sm">
                      <thead class="text-center">
                        <tr class="text-nowrap">
                          <th>No</th>
                          <th class="bg-warning text-white">@sortablelink('pegawai_id', 'Nama PNS (Pasangan)')</th>
                          <th>@sortablelink('nama_si','Nama Suami/Istri')</th>
                          <th>@sortablelink('t_lahir','Tempat,Tanggal lahir')</th>
                          <th>@sortablelink('j_kelamin','J.Kelamin')</th>
                          <th>@sortablelink('status','Status')</th>
                          <th>@sortablelink('pekerjaan','Pekerjaan Suami/istri')</th>
                          <th>@sortablelink('umur','Umur')</th>
                          <th>@sortablelink('nohp','No HP')</th>
                          <th>@sortablelink('sts_tunjangan','Status Tunjangan')</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no= $suami_istri->firstItem(); @endphp
                          @forelse ($suami_istri as $item)
                          <tr>
                            <th>{{ $no++ }}</th>
                            <td class="text-success">{{ $item->pegawai->nama }} ({{ $item->pegawai->nip }})</td>
                            <td>{{ $item->nama_si }}</td>
                            <td>{{ $item->t_lahir }}, {{ $item->tgl_lahir }}</td>
                            <td>{{ $item->j_kelamin }}</td> 
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->pekerjaan }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ $item->nohp }}</td>
                            <td>{{ $item->sts_tunjangan }}</td>
                            <td>
                              <a href="/suami_istri/{{ $item->id }}" class="btn btn-success btn-sm"> <i class="bx bx-search"></i></a>
                              @can('admin')
                              <a href="/suami_istri/{{ $item->id }}/edit" class="btn btn-warning btn-sm">  <i class="bx bx-edit"></i></a>
                              <form onsubmit="return confirm('Yakin Mau Hapus Data??')" action="/suami_istri/{{ $item->id }}" method="POST" class="d-inline">
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
              {{ $suami_istri->links() }}
          </div>
      </div>
  </div>
</div>

@endsection