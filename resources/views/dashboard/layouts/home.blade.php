@extends('dashboard.index')
@section('home' ,'active')
    
@section('content')
<div class="card">
                <div class="card-body">
                  <h4 class="card-title text-primary">Selamat Datang <span class="text-success">{{ auth()->user()->name }}</span> </h4>
                          <p class="mb-4">
                            <h5>Di Sistem Informasi Monitoring dan Pendataan Pegawai (SIMPP)</h5>
                            <h5>Dinas Satuan Polisi Pamong Praja dan Damkar Tapin</h5>
                          </p>
                          <hr><br>
               <div class="row">
                <div class="col-md-6 col-xl-3">
                  <div class="card bg-primary text-white mb-3">
                    {{-- <div class="card-header">Jumlah PNS <i class='bx bxs-user'></i> </div> --}}
                    <div class="card-body">
                      <h3 class="text-white"><i class='bx bxs-user-rectangle'></i> Total PNS :</h3>
                      <h4 class="card-title text-white">{{ $jumlah_pegawai }} Orang</h4>
                    </div>
                  </div>
                </div>
                  <div class="col-md-6 col-xl-3">
                    <div class="card bg-warning text-white mb-3">
                      {{-- <div class="card-header">Jumlah PNS <i class='bx bxs-user'></i> </div> --}}
                      <div class="card-body">
                        <h3 class="text-white"><i class='bx bxs-user-rectangle'></i> Total Non PNS :</h3>
                        <h4 class="card-title text-white">{{ $non_pns }} Orang</h4>
                      </div>
                    </div>
                  </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card bg-success text-white mb-3">
                    {{-- <div class="card-header">Header</div> --}}
                    <div class="card-body">
                      <h4 class="text-white"><i class='bx bxs-user-account' ></i> PNS Naik Gaji Berkala</h4>
                      <h4 class="card-title text-white">{{ $jumlah_nb }} Orang</h4>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card bg-danger text-white mb-3">
                    {{-- <div class="card-header">Header</div> --}}
                    <div class="card-body">
                      <h4 class="text-white"><i class='bx bxs-user-account' ></i> PNS Naik Pangkat</h4>
                      <h4 class="card-title text-white">{{ $jumlah_np }} Orang</h4>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card bg-secondary text-white mb-3">
                    {{-- <div class="card-header">Header</div> --}}
                    <div class="card-body">
                      <h3 class="text-white"><i class='bx bxs-user'></i> Total Anak PNS</h3>
                      <h4 class="card-title text-white">{{ $jumlah_anak }} Orang</h4>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card bg-info text-white mb-3">
                    {{-- <div class="card-header">Header</div> --}}
                    <div class="card-body">
                      <h4 class="text-white"><i class='bx bxs-user-account' ></i> Total Suami PNS</h4>
                      <h4 class="card-title text-white">{{ $jumlah_suami }} Orang</h4>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3">
                  <div class="card bg-dark text-white mb-3">
                    {{-- <div class="card-header">Header</div> --}}
                    <div class="card-body">
                      <h3 class="text-white"><i class='bx bxs-user-account' ></i> Total Istri PNS</h3>
                      <h4 class="card-title text-white">{{ $jumlah_istri }} Orang</h4>
                    </div>
                  </div>
                </div>
                @can('admin')
                <div class="col-md-6 col-xl-3">
                  <div class="card bg-warning text-white mb-3">
                    {{-- <div class="card-header">Header</div> --}}
                    <div class="card-body">
                      <h3 class="text-white"><i class='bx bxs-user-pin' ></i> Total User</h3>
                      <h4 class="card-title text-white">{{ $jumlah_user }} Orang</h4>
                    </div>
                  </div>
                </div>
                @endcan
                @can('admin')
                <div class="col-md-6 col-xl-3">
                  <div class="card bg-success text-white mb-3">
                    {{-- <div class="card-header">Header</div> --}}
                    <div class="card-body">
                      <h3 class="text-white"><i class='bx bxs-user-pin' ></i> Pesan Masuk</h3>
                      <h4 class="card-title text-white">{{ $pesan }} pesan</h4>
                    </div>
                  </div>
                </div>
                @endcan
              </div>
                </div>
             </div>
              
    
@endsection