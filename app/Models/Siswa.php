<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama','nipd','nisn','jenis_kelamin','kelas','tempat_lahir','tanggal_lahir','nik',
        'agama','alamat','telepon','nama_orangtua','sekolah_asal'
    ];
}
