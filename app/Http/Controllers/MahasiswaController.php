<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'

        $mahasiswa = [
            'nama' => 'Alfarrel Thariq Sya\'ban',
            'nim' => '102042400043',
            'email' => 'alfarrel@student.telkomuniversity.ac.id',
            'jurusan' => 'Sistem Informasi',
            'fakultas' => 'Fakultas Rekayasa Industri',
            'foto' => 'https://via.placeholder.com/150'
        ];

        // Mengirim data ke view profil.blade.php
        return view('profil', compact('mahasiswa'));
    }
}
