<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;
use App\Http\Requests\PengaturanRequest;

class PengaturanController extends Controller
{
    public function index()
    {
        $pengaturan = Pengaturan::first();
        $pengaturan->misi = explode('|', $pengaturan->misi);
        $pengaturan->visi = explode('|', $pengaturan->visi);
        
        return view('admin.pengaturan', ["pengaturan" => $pengaturan]);
    }
    
    public function update($id, PengaturanRequest $request)
    {
        //request sudah divalidasi di form request PengaturanRequest
        $pengaturan = Pengaturan::find($id);
        
        //cek apakah user mengupload gambar
        if($request->file('logo')) {
          //generate nama file baru 
          $namaFile = $request->logo->hashName();
          //pindahkan logo ke public
          $storage = "public/logo";
          $request->logo->storeAs($storage, $namaFile);
          //hapus logo lama 
          if($request->logo_lama !== 'logo-sekolah.png') {
            unlink('./storage/logo/' . $request->logo_lama);
          }
        } else {
          $namaFile = $request->logo_lama;
        }
        
        //gabungkan array misi dan visi 
        $misi = implode('|', $request->misi);
        $visi = implode('|', $request->visi);
        
        $pengaturan->nama_sekolah = $request->nama_sekolah;
        $pengaturan->alamat_sekolah = $request->alamat_sekolah;
        $pengaturan->telepon_sekolah = $pengaturan->telepon_sekolah;
        $pengaturan->email_sekolah = $request->email_sekolah;
        $pengaturan->tema = $request->tema;
        $pengaturan->logo = $namaFile;
        $pengaturan->visi = $visi;
        $pengaturan->misi = $misi;
        $pengaturan->save();
        
        return redirect()->to('/admin/pengaturan')->with('msg', 'Pengaturan berhasil diterapkan');
    }
    
    public function editVisi()
    {
        $pengaturan = Pengaturan::first();
        $visi = explode('|', $pengaturan->visi);
        
        return view('admin.editVisi', ['visi' => $visi]);
    }
    
    public function editMisi()
    {
        $pengaturan = Pengaturan::first();
        $misi = explode('|', $pengaturan->misi);
        
        return view('admin.editMisi', ['misi' => $misi]);
    }
    
    public function updateVisi(Request $request)
    {
        $pengaturan = Pengaturan::first();
        
        //gabungkan array visi jadi string
        $visi = implode('|', $request->visi);
        $pengaturan->visi = $visi;
        $pengaturan->save();
        
        return redirect()->to('/admin/pengaturan')->with('msg', 'Visi sekolah berhasil diperbarui');
    }
    
    public function updateMisi(Request $request)
    {
        $pengaturan = Pengaturan::first();
        
        //gabungkan array misi jadi string
        $misi = implode('|', $request->misi);
        $pengaturan->misi = $misi;
        $pengaturan->save();
        
        return redirect()->to('/admin/pengaturan')->with('msg', 'Misi sekolah berhasil diperbarui');
    }
}
