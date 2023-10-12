<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_lengkap' => 'required',
            'nipd' => 'required|unique:siswa,nipd',
            'nisn' => 'required|unique:siswa,nisn',
            'alamat' => 'required|string',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required|date',
            'agama' => 'required',
            'no_telp' => 'required',
            'namaorangtua' => 'required',
            'asalsekolah' => 'required',
            'rombel' => 'required'
        ];
    }
}
