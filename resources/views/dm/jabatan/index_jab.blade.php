@extends('dashboard.index')
@section('dm','active')
@section('jabatan','active')
<title>SIMPP | Data Jabatan</title>
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header text-success text-bold ">Data Jabatan <i class="bx bx-tag"></i></h5>
            <hr class="dropdown-divider ">
            <div class="card-header">
              <a href="jabatan/create" class="btn btn-success">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="card">
                <hr class="dropdown-divider ">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover ">
                    <thead class="table-secondary">
                      <tr class="text-nowrap">
                        <th>No</th>
                        <th>Nama Jabatan</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $jabatan)
                      <tr class="">
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $jabatan->nama_jabatan }}</td>
                        <td><div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/jabatan/{{ $jabatan->id_jabatan }}/edit" class="btn btn-warning"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <form onsubmit="return confirm('Yakin Mau Hapus Data??')" action="/jabatan/{{ $jabatan->id_jabatan }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button class="text-danger" type="submit"><i class="bx bx-trash me-1"></i>Delete</button>
                            </form>
                          </div>
                        </div></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $data->onEachSide(1)->links() }}
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection