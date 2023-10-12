@extends('template.main')

@section('content')
    <form method="POST" action="{{ route('admin.siswa-store') }}">
        @csrf
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user-plus"></i></div>
                                Tambah Data Siswa
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <a class="btn btn-sm btn-secondary" href="{{ route('admin.siswa') }}">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="fa-solid fa-arrow-left me-1"></i>
                                    Kembali
                                </div>
                            </a>
                            <button class="btn btn-sm btn-primary" type="submit">
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="fa-solid fa-floppy-disk me-1"></i>
                                    Simpan
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Data Siswa</div>
                        <div class="card-body">


                            <div class="mb-3">
                                <label class="small mb-1" for="inputLastName">Nama Lengkap</label>
                                <input class="form-control" id="inputLastName" name="namalengkap" type="text"
                                    placeholder="Masukkan Nama Lengkap Siswa" value="" />
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenisKelamin1" value="l">
                                    <label class="form-check-label" for="jenisKelamin1">
                                      Laki-laki
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jeniskelamin2" value="p">
                                    <label class="form-check-label" for="jeniskelamin2">
                                      Perempuan
                                    </label>
                                  </div>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="alamat">Alamat Siswa</label>
                                <textarea name="alamat" id="alamat" name="alamat" class="form-control"></textarea>
                            </div>

                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="tempatlahir">Tempat Lahir</label>
                                    <input class="form-control" name="tempatlahir" id="tempatlahir" type="text"
                                        value="" />
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="tanggallahir">Tanggal Lahir</label>
                                    <input class="form-control" id="tanggallahir" name="tanggallahir" type="date"
                                        value="" />
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="agama">Agama</label>
                                    <select class="form-select" aria-label="agama siswa" name="agama">
                                        <option selected disabled>Pilih salah satu</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="katolik">Katolik</option>
                                        <option value="islam">Islam</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="budha">Budha</option>
                                        <option value="konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="no_telp">Nomer Telepon</label>
                                    <input class="form-control" id="no_telp" name="no_telp" type="text"
                                        value="" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="namaorangtua">Nama Orangtua</label>
                                <input class="form-control" name="namaorangtua" id="namaorangtua" type="text"
                                    value="" />
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="asalsekolah">Asal Sekolah</label>
                                <input class="form-control" name="asalsekolah" id="asalsekolah" type="text"
                                    value="" />
                            </div>

                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="nipd">NIPD</label>
                                    <input class="form-control" name="nipd" id="nipd" type="text"
                                        value="" />
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="nisn">NISN</label>
                                    <input class="form-control" id="nisn" name="nisn" type="text"
                                        placeholder="Nomer Induk Siswa Nasional" value="" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="rombel">Rombongan Belajar</label>
                                <select class="form-select" aria-label="rombel" name="rombel">
                                    <option selected disabled>Pilih salah satu</option>
                                    <option value="xtkj">X TKJ</option>
                                    <option value="xbdp">X BDP</option>
                                    <option value="xitjk1">XI TKJ 1</option>
                                    <option value="xitkj2">XI TKJ 2</option>
                                    <option value="xibdp">XI BDP</option>
                                    <option value="xiitkj1">XII TKJ 1</option>
                                    <option value="xiitkj2">XII TKJ 2</option>
                                    <option value="xiibdp">XII BDP</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
