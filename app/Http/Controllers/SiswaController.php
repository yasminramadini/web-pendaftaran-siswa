<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SiswaRequest;
use App\Models\Siswa;
use Carbon\Carbon;
use AuthTrait;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize();
        
        return view('admin.dashboard', ['siswa' => Siswa::latest()->get()]);
    }

    public function store(SiswaRequest $request)
    {
        //sudah di validasi lewat form request SiswaRequest
        
        //generate nama file 
        $namaFile = $request->foto->hashName();
        
        //pindahkan foto ke folder public/foto 
        $storage = 'public/foto';
        $request->foto->storeAs($storage, $namaFile);
        
        Siswa::create([
          'nama' => $request->nama,
          'tgl_lahir' => $request->kota_lahir . '|' . $request->tgl_lahir,
          'asal_sekolah' => $request->asal_sekolah,
          'jenis_kelamin' => $request->jenis_kelamin,
          'agama' => $request->agama,
          'nik' => $request->nik,
          'telepon' => $request->telepon,
          'email' => $request->email,
          'alamat' => $request->alamat,
          'foto' => $namaFile
        ]);
        
        return redirect()->route('form-daftar')->with('msg', 'Selamat! Kamu berhasil mendaftar. Kami akan menghubungimu lebih lanjut jika kamu diterima');
    }

    public function show($id)
    {
        $this->authorize();
        
        $siswa = Siswa::find($id);
        
        //menggabungkan tempat dan tanggal lahir
        $tgl_lahir = explode('|', $siswa->tgl_lahir);
        $siswa['tgl_lahir'] = $tgl_lahir[0] . ', ' . Carbon::parse($tgl_lahir[1])->locale('id_ID')->isoFormat('Do MMMM YYYY');
        
        $waktuAwal = Carbon::parse($tgl_lahir[1]);
        $waktuAkhir = Carbon::now();
        $siswa['umur'] = $waktuAwal->locale('id_ID')->diffInYears($waktuAkhir);
        
        return view('admin.detailSiswa', ['siswa' => $siswa]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->authorize();
        
        $siswa = Siswa::find($id);
        $siswa->diterima = true;
        $siswa->save();
        
        return redirect()->route('admin.dashboard')->with('msg', 'Siswa telah diterima dan notifikasi email telah dikirim!');
    }

    public function destroy($id)
    {
        //
    }
}
