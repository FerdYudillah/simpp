@extends('dashboard.index')
@section('ds','active')
@section('user','active')
<title>SIMPP | Data User</title>
@section('content')
@if (session()->has('delete'))
<div class="alert alert-danger col-lg-3" role="alert">
  {{ session('delete') }}
</div>
@endif

<div class="row justify-content-center">
  <div class="col-md-12">
      <div class="card">
          <h5 class="card-header text-danger">Data User <i class="bx bx-user"></i></h5>
          <div class="card-body">
            <form action="/user" method="GET">
              <div class="row">
                <div class="col-12 col-sm-2">
                  @can('admin')
                  <a href="/user/create" class="btn btn-danger">Tambah User</a>
                  @endcan
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
                          <th>@sortablelink('name','Nama')</th>
                          <th>@sortablelink('email','Email')</th>
                          <th>@sortablelink('username','Username')</th>
                          <th>@sortablelink('level','Level')</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no= $user->firstItem(); @endphp
                          @forelse ($user as $item)
                          <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->level }}</td>
                        <td>
                              @can('admin')
                              <a href="/user/{{ $item->id }}" class="btn btn-info btn-sm">  <i class="bx bx-search"></i></a>
                              <a href="/user/{{ $item->id }}/edit" class="btn btn-warning btn-sm">  <i class="bx bx-edit"></i></a>
                              <form onsubmit="return confirm('Yakin Mau Hapus Data??')" action="/user/{{ $item->id }}" method="POST" class="d-inline">
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
              {{ $user->onEachSide(1)->links() }}
          </div>
      </div>
  </div>
</div>

@endsection