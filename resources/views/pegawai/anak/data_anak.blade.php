@extends('dashboard.index')
@section('main','active')
@section('anak','active')
<title>SIMPP | Data Anak PNS</title>
@section('content')


@if (session()->has('delete'))
<div class="alert alert-danger col-lg-3" role="alert">
  {{ session('delete') }}
</div>
@endif

<div class="row justify-content-center">
  <div class="col-md-12">
      <div class="card">
          <h5 class="card-header text-success">Data Anak PNS Satpol PP & Damkar <i class="bx bx-user"></i></h5>
          <div class="card-body">
            <form action="/anak" method="GET">
              <div class="row">
                <div class="col-12 col-sm-2">
                  @can('admin')
                  <a href="/anak/create" class="btn btn-success">Tambah Data</a>
                  @endcan
                </div>
                <div class="col-12 col-sm-6">
                  <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bxs-printer'></i>
                      Cetak 
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <li><a class="dropdown-item" href="/exportanak">PDF <i class='bx bxs-file-pdf' ></i></a></li>
                    </ul>
                  </div>
                </div>
             <div class="col-12 col-sm-4">
              <div class="input-group">
                <input type="text" name="cari" id="cari" class="form-control" value="{{ $cari }}">
                <button type="submit" class="btn btn-success btn-sm ">Cari</button>
              </div>
             </div>
              </div>
            </form>
              <div class="table-responsive">
                  <table class="table table-hover table-bordered table-sm ">
                      <thead class="text-center">
                        <tr class="text-nowrap">
                          <th>No</th>
                          <th class="bg-warning text-white">@sortablelink('pegawai_id', 'Nama PNS/Orang Tua Anak')</th>
                          <th>@sortablelink('nama','Nama Anak')</th>
                          <th>@sortablelink('jenis_kelamin','Jenis Kelamin Anak')</th>
                          <th>@sortablelink('umur', 'Umur')</th>
                          <th>@sortablelink('status', 'Status')</th>
                          <th >@sortablelink('tunjangan', 'Status Tunjangan')</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no= $anak->firstItem(); @endphp
                          @forelse ($anak as $item)
                          <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $item->pegawai->nama }}-({{ $item->pegawai->nip }})</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->tunjangan }}</td>
                            <td>
                              <a href="/anak/{{ $item->id }}" class="btn btn-success btn-sm"> <i class="bx bx-search"></i></a>
                              @can('admin')
                             <a href="/anak/{{ $item->id }}/edit" class="btn btn-warning btn-sm">  <i class="bx bx-edit"></i></a>
                             <form onsubmit="return confirm('Yakin Mau Hapus Data??')" action="/anak/{{ $item->id }}" method="POST" class="d-inline">
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
              {{ $anak->links() }}
          </div>
      </div>
  </div>
</div>

@endsection