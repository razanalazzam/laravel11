<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Razan Muhammad Al-azzam',
            'nim' => '251011701090',
            'prodi' => 'Sistem Informasi',
            'email' => 'zanalazzam@gmail.com .com',
            'kampus' => 'Universitas Pamulang (UNPAM)',
            'status' => 'Aktif',
            'foto' => 'foto-razan.jpg.jpeg' // <-- Sesuaikan dengan nama file fotomu yang baru
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}