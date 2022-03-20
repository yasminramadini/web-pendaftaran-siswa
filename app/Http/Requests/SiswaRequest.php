<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'kota_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'nik' => 'required|min:16',
            'telepon' => 'required|min:10',
            'email' => 'nullable|email',
            'alamat' => 'required',
            'foto' => 'required|file|max:5000|image|mimes:jpg,jpeg,png'
        ];
    }
    
    public function messages()
    {
        return [
            'nama.required' => 'Nama wajib diisi',
            'asal_sekolah.required' => 'Asal sekolah wajib diisi',
            'kota_lahir.required' => 'Kota kelahiran wajib diisi',
            'tgl_lahir.required' => 'Tanggal kelahiran wajib diisi',
            'tgl_lahir.date' => 'Format tanggal lahir harus tanggal',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi',
            'agama.required' => 'Agama wajib diisi',
            'nik.required' => 'NIK wajib diisi',
            'nik.min' => 'NIK minimal 16 angka',
            'telepon.required' => 'Telepon wajib diisi',
            'telepon.min' => 'Telepon minimal 10 angka',
            'email.email' => 'Format email tidak valid',
            'alamat.required' => 'Alamat wajib diisi',
            'foto.required' => 'Foto wajib diupload',
            'foto.max' => 'Ukuran foto maksimal 5MB',
            'foto.image' => 'Yang anda upload bukan foto',
            'foto.mimes' => 'Ekstensi foto harus JPG, JPEG, atau PNG'
        ];
    }
}
