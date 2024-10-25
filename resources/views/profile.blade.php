@extends('layouts.template')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm rounded-lg mb-4 bg-white position-relative">
                    <div class="card-body text-center p-4">
                        <div class="position-relative" style="transform: translateY(-5%); z-index: 10;">
                            @if ($user->profile_image)
                                <img src="{{ asset('storage/photos/' . $user->profile_image) }}"
                                    class="img-fluid rounded-circle shadow"
                                    style="width: 180px; height: 180px; object-fit: cover; margin-top: -75px;">
                            @else
                                <img src="{{ asset('/public/img/polinema-bw.png') }}"
                                    class="img-fluid rounded-circle shadow"
                                    style="width: 120px; height: 120px; object-fit: cover; margin-top: -60px;">
                            @endif
                        </div>
                        <h5 class="fw-bold mt-5">{{ $user->nama }}</h5>
                        <p class="text-muted mb-0">{{ $user->username }}</p>
                    </div>
                </div>

                <div class="card border-0 shadow-sm rounded-lg">
                    <div class="card-header bg-white text-center py-4">
                        <h5 class="mb-0 fw-bold text-dark">Edit Profil</h5>
                    </div>
                    <div class="card-body p-4">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('profile.update', $user->user_id) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">{{ __('Username') }}</label>
                                    <input id="username" type="text"
                                        class="form-control border-light shadow-sm @error('username') is-invalid @enderror"
                                        name="username" value="{{ $user->username }}" required autocomplete="username">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="nama" class="form-label">{{ __('Nama Lengkap') }}</label>
                                    <input id="nama" type="text"
                                        class="form-control border-light shadow-sm @error('nama') is-invalid @enderror"
                                        name="nama" value="{{ old('nama', $user->nama) }}" required autocomplete="nama">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <h6 class="mb-3 text-muted">Ubah Password</h6>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="old_password" class="form-label">{{ __('Password Saat Ini') }}</label>
                                    <input id="old_password" type="password"
                                        class="form-control border-light shadow-sm @error('old_password') is-invalid @enderror"
                                        name="old_password" autocomplete="current-password">
                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">{{ __('Password Baru') }}</label>
                                    <input id="password" type="password"
                                        class="form-control border-light shadow-sm @error('password') is-invalid @enderror"
                                        name="password" autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="password_confirmation" class="form-label">{{ __('Konfirmasi Password Baru') }}</label>
                                    <input id="password_confirmation" type="password"
                                        class="form-control border-light shadow-sm @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation" autocomplete="new-password">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12 mb-3">
                                    <label for="profile_image" class="form-label">{{ __('Foto Profil') }}</label>
                                    <input id="profile_image" type="file"
                                        class="form-control border-light shadow-sm"
                                        name="profile_image">
                                    <div class="form-text text-muted">Upload foto dengan format JPG, PNG, atau GIF (max. 2MB)</div>
                                </div>
                            </div>

                            <div class="text-end mt-4">
                                <button type="button" class="btn btn-outline-secondary">{{ __('Batal') }}</button>
                                <button type="submit" class="btn btn-primary">{{ __('Simpan Perubahan') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection