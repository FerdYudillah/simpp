@extends('dashboard.index')
@section('kp','active')
@section('naik_berkala','active')
<title>SIMPP | Data Kenaikan Gaji Berkala PNS Satpol PP & Damkar Tapin</title>
@section('content')


@if (session()->has('delete'))
<div class="alert alert-danger col-lg-3" role="alert">
  {{ session('delete') }}
</div>
@endif

<div class="row justify-content-center">
  <div class="col-md-12">
      <div class="card">
          <h4 class="card-header ">Data PNS Satpol PP & Damkar Tapin Yang Menerima Kenaikan Gaji Berkala <i class="bx bx-user"></i></h4>
          <div class="card-body">
            <form action="/naik_berkala" method="GET">
              <div class="row">
                <div class="col-12 col-sm-2">
                  @can('admin')
                  <a href="/naik_berkala/create" class="btn btn-danger">Tambah Data</a>
                  @endcan
                </div>
                <div class="col-12 col-sm-6">
                  <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bxs-printer'></i>
                      Cetak 
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <li><a class="dropdown-item" href="exportberkala">PDF <i class='bx bxs-file-pdf' ></i></a></li>
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
                          <th >No</th>
                          <th >Foto</th>
                          <th >@sortablelink('pegawai_id','NIP')</th>
                          <th >@sortablelink('pegawai_id','Nama')</th>
                          <th >@sortablelink('tgl_lahir','Tempat Tanggal Lahir')</th>
                          <th >@sortablelink('pangkat_id','Pangkat')</th>
                          <th >@sortablelink('jabatan_id','Jabatan')</th>
                          <th class="bg-warning text-white">@sortablelink('gaji_lama','Gaji Lama')</th>
                          <th class="bg-success text-white">@sortablelink('gaji_baru','Gaji baru')</th>
                          <th >@sortablelink('masa_kerja','Masa Kerja')</th>
                          <th >@sortablelink('golongan_id','Golongan')</th>
                          <th >@sortablelink('mulai_tgl','Tanggal Mulai')</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no= $naikBerkala->firstItem(); @endphp
                          @forelse ($naikBerkala as $item)
                          <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>
                              @if ($item->foto)
                          <img style="max-width: 80px;max-height:80px" src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->name }}" class="img-fluid">
                    @endif
                            </td>
                            <td>{{ $item->pegawai->nip }}</td>
                            <td>{{ $item->pegawai->nama }}</td>
                            <td>{{ $item->t_lahir }}, {{ $item->tgl_lahir }}</td>
                            <td>{{ $item->pangkat->nama_pangkat }}</td>
                            <td>{{ $item->jabatan->nama_jabatan }}</td>
                            <td>{{ formatRupiah($item->gaji_lama) }}</td>
                            <td>{{ formatRupiah($item->gaji_baru) }}</td>
                            <td>{{ $item->masa_kerja }}</td>
                            <td>{{ $item->golongan->nama_golongan }}</td>
                            <td class="text-success">{{ $item->mulai_tgl }}</td>
                            <td>
                              <a href="/naik_berkala/{{ $item->id }}" class="btn btn-success btn-sm"> <i class="bx bx-search"></i></a>
                              @can('admin')
                              <a href="/naik_berkala/{{ $item->id }}/edit" class="btn btn-warning btn-sm">  <i class="bx bx-edit"></i></a>
                              <form onsubmit="return confirm('Yakin Mau Hapus Data??')" action="/naik_berkala/{{ $item->id }}" method="POST" class="d-inline">
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
              {{ $naikBerkala->links() }}
          </div>
      </div>
  </div>
</div>

@endsection