<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengaturanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         return [
            'nama_sekolah' => 'required|min:3',
            'alamat_sekolah' => 'required|min:3',
            'logo' => 'nullable|file|max:2048|image|mimes:jpg,jpeg,png',
            'telepon_sekolah' => 'required|min:10',
            'alamat_sekolah' => 'required|min:3',
            'email_sekolah' => 'required|email', 
            'tema' => 'required'
        ];
    }
    
    public function messages()
    {
        return [
          'nama_sekolah.required' => 'Nama sekolah wajib diisi',
          'nama_sekolah.min' => 'Nama sekolah minimal 3 karakter',
          'asal_sekolah.required' => 'Asal sekolah wajib diisi',
          'asal_sekolah.min' => 'Asal sekolah minimal 3 karakter',
          'logo.max' => 'Ukuran logo maksimal 2MB',
          'logo.image' => 'Yang anda upload bukan gambar',
          'logo.mimes' => 'Ekstensi gambar harus JPEG, JPG, atau PNG',
          'telepon_sekolah.required' => 'Telepon sekolah wajib diisi',
          'telepon_sekolah.min' => 'Telepon sskolah minimal 10 angka',
          'alamat_sekolah.required' => 'Alamat sekolah wajib diisi',
          'alamat_sekolah.min' => 'Alamat sekolah minimal 3 karakter',
          'email_sekolah.required' => 'Email sekolah wajib diisi',
          'email_sekolah.email' => 'Email sekolah tidak valid',
          'tema' => 'Wajib memilih tema'
        ];
    } 
}
