<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SiswaRequest;
use App\Models\Siswa;
use App\Models\Pengaturan;
use Carbon\Carbon;
use App\Notifications\SiswaDiterima;
use App\Notifications\SiswaTidakDiterima;

class SiswaController extends Controller
{
    use AuthTrait;
    
    public function index($nama = null, Request $request)
    {
        $this->autorisasi();
        
        //jika melakukan pencarian
        if($request->keyword !== null) {
          $siswa = Siswa::where('nama', 'like', '%' . $request->keyword . '%')->get();
        } else {
          $siswa = Siswa::latest()->get();
        }
        
        return view('admin.dashboard', ['siswa' => $siswa]);
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
        $this->autorisasi();
        
        $siswa = Siswa::find($id);
        
        //menggabungkan tempat dan tanggal lahir
        $tgl_lahir = explode('|', $siswa->tgl_lahir);
        $siswa['tgl_lahir'] = $tgl_lahir[0] . ', ' . Carbon::parse($tgl_lahir[1])->locale('id_ID')->isoFormat('Do MMMM YYYY');
        
        $waktuAwal = Carbon::parse($tgl_lahir[1]);
        $waktuAkhir = Carbon::now();
        $siswa['umur'] = $waktuAwal->locale('id_ID')->diffInYears($waktuAkhir);
        
        return view('admin.detailSiswa', ['siswa' => $siswa]);
    }

    public function diterima(Request $request, $id)
    {
        $this->autorisasi();
        
        $siswa = Siswa::find($id);
        $siswa->diterima = true;
        $siswa->save();
        
        $pengaturan = Pengaturan::select('nama_sekolah', 'alamat_sekolah', 'telepon_sekolah', 'email_sekolah')->first();
        
        //kirim notifikasi email jika checkbox dicentang
        if($request->kirimEmail) {
          $siswa->notify(new SiswaDiterima($siswa, $pengaturan)
          );
        }
        
        return redirect()->route('admin.dashboard')->with('msg', 'Siswa telah diterima dan notifikasi email telah dikirim!');
    }
    
    public function tidakDiterima(Request $request, $id)
    {
        $this->autorisasi();
        
        $siswa = Siswa::find($id);
        $pengaturan = Pengaturan::first();
        
        //kirim notifikasi email jika checkbox dicentang
        if($request->kirimEmail) {
          $siswa->notify(new SiswaTidakDiterima($siswa, $pengaturan));
        }
        
        unlink('./storage/foto/' . $siswa->foto);
        $siswa->delete();
        
        return redirect()->to('/admin/dashboard')->with('msg', 'Siswa telah ditolak dan terhapus dari daftar siswa');
    }

    public function destroy($id)
    {
        $this->autorisasi();
        
        $siswa = Siswa::find($id);
        unlink('./storage/foto' . $siswa->foto);
        $siswa->delete();
        
        return redirect()->to('/admin/dashboard')->with('msg', 'Siswa berhasil dihapus');
    }
}
