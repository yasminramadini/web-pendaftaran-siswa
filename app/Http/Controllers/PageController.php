<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;

class PageController extends Controller
{
    public function index()
    {
        $pengaturan = Pengaturan::first();
        $pengaturan->visi = explode('|', $pengaturan->visi);
        $pengaturan->misi = explode('|', $pengaturan->misi);
        $pengaturan->fasilitas = explode('|', $pengaturan->fasilitas);
        
        return view('index', ['pengaturan' => $pengaturan]);
    }
    
    public function formDaftar()
    {
        return view('formDaftar', ['pengaturan' => Pengaturan::select('nama_sekolah', 'tema')->first()]);
    }
}
