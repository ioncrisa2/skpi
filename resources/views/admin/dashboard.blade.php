@extends('template.main')

@section('content')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="home"></i></div>
                            Dashboard
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <div class="btn btn-github">
                            Hari ini tanggal {{ date('j F Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Rekap Kegiatan Siswa Terbaru</span>
                            <button class="btn btn-sm btn-link">Lihat data</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped table-bordered">
                            <thead>
                                <tr class="fs-6">
                                    <th class="text-center" width="20%">Nama Siswa</th>
                                    <th class="text-center" width="50%">Kegiatan</th>
                                    <th class="text-center" width="15%">Tanggal Kegiatan</th>
                                    <th class="text-center" width="15%">Tanggal Submit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Peserta Lomba 17 Agustus</td>
                                    <td class="text-center">15 Agustus 2023</td>
                                    <td class="text-center">18 Agustus 2023</td>
                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Peserta upacara AUBADE</td>
                                    <td class="text-center">17 Agustus 2023</td>
                                    <td class="text-center">18 Agustus 2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
