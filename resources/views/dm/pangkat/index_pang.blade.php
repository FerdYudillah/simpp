@extends('dashboard.index')
@section('dm','active')
@section('pangkat','active')
<title>SIMPP | Data Pangkat </title>
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header text-primary ">Data Pangkat <i class="bx bx-label"></i></h5>
            <hr class="dropdown-divider ">
            <div class="card-header">
              <a href="pangkat/create" class="btn btn-danger">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="card">
                <hr class="dropdown-divider ">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover ">
                    <thead class="table-secondary">
                      <tr class="text-nowrap">
                        <th>No</th>
                        <th>@sortablelink('nama_pangkat','Nama Pangkat')</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $pangkat)
                      <tr>
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $pangkat->nama_pangkat }}</td>
                        <td><div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/pangkat/{{ $pangkat->id_pangkat }}/edit" class="btn btn-warning"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <form onsubmit="return confirm('Yakin Mau Hapus Data??')" action="/pangkat/{{ $pangkat->id_pangkat }}" method="POST" >
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