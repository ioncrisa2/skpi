@extends('template.main')

@section('content')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Master Data Siswa
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-outlined-dark" href="user-management-groups-list.html">
                            <div class="d-flex justify-content-between align-items-center">
                                <i class="fa-solid fa-file-excel me-1"></i>
                                Format Import Data Siswa
                            </div>
                        </a>
                        <a class="btn btn-sm btn-outlined-dark" href="user-management-add-user.html">
                            <div class="d-flex justify-content-between align-items-center">
                                <i class="fa-solid fa-file-excel me-1"></i>
                                Import Data Siswa
                            </div>
                        </a>
                        <a class="btn btn-sm btn-outlined-dark" href="{{ route('admin.siswa-create') }}">
                            <div class="d-flex justify-content-between align-items-center">
                                <i class="me-1" data-feather="user-plus"></i>
                                Tambah Data Siswa
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container px-4">
        <div class="card">
            <div class="card-body">
                <table id="datatables" class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>NIPD</th>
                            <th>NISN</th>
                            <th>Tempat Tanggal Lahir</th>
                            <th>Rombongan Belajar</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-1.png" /></div>
                                    Tiger Nixon
                                </div>
                            </td>
                            <td>tiger@email.com</td>
                            <td>Administrator</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-blue-soft text-blue">Developers</span>
                                <span class="badge bg-red-soft text-red">Marketing</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                                <span class="badge bg-yellow-soft text-yellow">Customer</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid"
                                            src="assets/img/illustrations/profiles/profile-2.png" /></div>
                                    Garrett Winters
                                </div>
                            </td>
                            <td>gwinterse@email.com</td>
                            <td>Administrator</td>
                            <td>
                                <span class="badge bg-green-soft text-green">Sales</span>
                                <span class="badge bg-blue-soft text-blue">Developers</span>
                                <span class="badge bg-red-soft text-red">Marketing</span>
                                <span class="badge bg-purple-soft text-purple">Managers</span>
                                <span class="badge bg-yellow-soft text-yellow">Customer</span>
                            </td>
                            <td>20 Jun 2021</td>
                            <td>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                    href="user-management-edit-user.html"><i data-feather="edit"></i></a>
                                <a class="btn btn-datatable btn-icon btn-transparent-dark" href="#!"><i
                                        data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
