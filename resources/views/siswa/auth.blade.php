@extends('template.auth')

@section('content')
    <div class="container-xl mt-5">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12">
                <div class="card my-5">
                    <div class="card-body mt-4 p-2 text-center">
                        <div class="h3 fw-light mb-3">Login Siswa SKPI</div>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-success" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="POST" action="">
                            @csrf

                            <div class="mb-3">
                                <label class="text-gray-600 small" for="emailExample">Username (NIS)</label>
                                <input class="form-control form-control-solid @error('nis') is-invalid @enderror"
                                    name="nis" type="text" aria-label="Username" aria-describedby="username" />
                                @error('nis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="text-gray-600 small" for="passwordExample">Password</label>
                                <input class="form-control form-control-solid @error('nis') is-invalid @enderror"
                                    name="password" type="password" placeholder="" aria-label="Password"
                                    aria-describedby="passwordExample" />
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2 py-3">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
