@extends('dashboard.index')
@section('kp','active')
@section('naik_pangkat','active')
<title>SIMPP | Data Kenaikan Pangkat PNS Satpol PP & Damkar Tapin</title>
@section('content')


@if (session()->has('delete'))
<div class="alert alert-danger col-lg-3" role="alert">
  {{ session('delete') }}
</div>
@endif

<div class="row justify-content-center">
  <div class="col-md-12">
      <div class="card">
          <h5 class="card-header text-primary">Data PNS Satpol PP & Damkar Tapin Yang akan menerima kenaikan Pangkat <i class="bx bx-user"></i></h5>
          <div class="card-body">
            <form action="/naik_pangkat" method="GET">
              <div class="row">
                <div class="col-12 col-sm-2">
                  @can('admin')
                  <a href="/naik_pangkat/create" class="btn btn-primary">Tambah Data</a>
                  @endcan
                </div>
                <div class="col-12 col-sm-6">
                  <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bxs-printer'></i>
                      Cetak
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <li><a class="dropdown-item" href="/exportpangkat">PDF <i class='bx bxs-file-pdf' ></i></a></li>
                      <li><a class="dropdown-item" href="{{ route('np.excel') }}" target="_blank">Excel <i class='bx bx-file'></i></i></a></li>
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
                  <table class="table table-hover table-bordered table-sm">
                      <thead class="text-center">
                        <tr class="text-nowrap">
                          <th>No</th>
                          <th>Foto</th>
                          <th>@sortablelink('pegawai_id','NIP')</th>
                          <th>@sortablelink('pegawai_id','Nama')</th>
                          <th>@sortablelink('pangkat_id','Pangkat Lama')</th>
                          <th>@sortablelink('golongan_id','Golongan')</th>
                          <th>@sortablelink('jabatan_id','Jabatan')</th>
                          <th class="bg-warning text-white">@sortablelink('pangkat_baru','Pangkat Baru')</th>
                          <th>@sortablelink('mulai_tanggal','Tanggal Mulai')</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no= $naikPangkat->firstItem(); @endphp
                          @forelse ($naikPangkat as $np)
                          <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>
                              @if ($np->foto)
                          <img style="max-width: 80px;max-height:80px" src="{{ asset('storage/' . $np->foto) }}" alt="{{ $np->name }}" class="img-fluid">
                    @endif
                            </td>
                            <td>{{ $np->pegawai->nip }}</td>
                            <td>{{ $np->pegawai->nama }}</td>
                            <td>{{ $np->pangkat->nama_pangkat }}</td>
                            <td>{{ $np->golongan->nama_golongan }}</td>
                            <td>{{ $np->jabatan->nama_jabatan }}</td>
                            <td>{{ $np->pangkat_baru }}</td>
                            <td>{{ $np->mulai_tanggal }}</td>>
                            <td>
                              <a href="/naik_pangkat/{{ $np->id }}" class="btn btn-success btn-sm"> <i class="bx bx-search"></i></a>
                              @can('admin')
                              <a href="/naik_pangkat/{{ $np->id }}/edit" class="btn btn-warning btn-sm">  <i class="bx bx-edit"></i></a>
                              <form onsubmit="return confirm('Yakin Mau Hapus Data??')" action="/naik_pangkat/{{ $np->id }}" method="POST" class="d-inline">
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
              {{ $naikPangkat->links() }}
          </div>
      </div>
  </div>
</div>

@endsection
