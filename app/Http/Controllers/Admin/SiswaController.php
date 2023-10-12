<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSiswaRequest;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiswaController extends Controller
{
    public function index(): View
    {
        return view('admin.siswa.index');
    }

    public function create()
    {
        return view('admin.siswa.create');
    }

    public function store(CreateSiswaRequest $request)
    {
        $request->validated();

        $siswa = new Siswa();
        $siswa->nama = $request->nama_lengkap;
        $siswa->nipd = $request->nipd;
        $siswa->nisn = $request->nisn;

    }
}
