@extends('dashboard.index')
@section('user','active')
<title>SIMPP | Profile User</title>
@section('content')
    <div class="mb-3">
        <a href="/user" class="btn btn-success">Kembali</a>
    </div>
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0 text-success">Profile User <i class="bx bx-tag"></i
                    ></h5>
              </div>
              <div class="card-body">
                <form method="" >
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="name">Nama User</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="name" class="input-group-text"
                          >:</span>
                        <input
                          type="text"
                          class="form-control @error('name')
                              is-invalid
                          @enderror"
                          id="name"
                          name="name"
                          value="{{ old('name', $user->name) }}"
                        />
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="email">Email User</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="email" class="input-group-text"
                          >:</span>
                        <input
                          type="email"
                          class="form-control @error('email')
                              is-invalid
                          @enderror"
                          id="email"
                          name="email"
                          value="{{ old('email', $user->email) }}"
                        />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="username">Username</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="username" class="input-group-text"
                          >:</span>
                        <input
                          type="text"
                          class="form-control @error('username')
                              is-invalid
                          @enderror"
                          id="username"
                          name="username"
                          value="{{ old('username', $user->username) }}"
                        />
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3 form-password-toggle">
                    <label class="col-sm-2 col-form-label" for="password">Password</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="password" class="input-group-text"
                          ></span>
                        <input
                          type="password"
                          class="form-control @error('password')
                              is-invalid
                          @enderror"
                          id="password"
                          name="password"
                          value="{{ $user->password }}"
                          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                        />
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  @can('admin')
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="level">Level</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="level" class="input-group-text"
                          ><i class="bx bx-tag"> :</i
                        ></span>
                        <input
                          type="text"
                          class="form-control @error('level')
                              is-invalid
                          @enderror"
                          id="level"
                          name="level"
                          value="{{ old('level', $user->level) }}"
                        />
                        @error('level')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  @endcan
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection