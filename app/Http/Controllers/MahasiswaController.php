<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Chaerani Nur Azizah';
        $nim = '242520034';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function daftar()
    {
        $mahasiswa = [
            ['nama' => 'Andi', 'nim' => '24001', 'ipk' => 3.80],
            ['nama' => 'Budi', 'nim' => '24002', 'ipk' => 3.20],
            ['nama' => 'Citra', 'nim' => '24003', 'ipk' => 3.60],
            ['nama' => 'Dinda', 'nim' => '24004', 'ipk' => 2.75],
            ['nama' => 'Eko', 'nim' => '24005', 'ipk' => 1.90],
        ];

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
{
    $mahasiswa = [
        ['nama' => 'Andi', 'nim' => '24001', 'ipk' => 3.80],
        ['nama' => 'Budi', 'nim' => '24002', 'ipk' => 3.20],
        ['nama' => 'Citra', 'nim' => '24003', 'ipk' => 3.60],
        ['nama' => 'Dinda', 'nim' => '24004', 'ipk' => 2.75],
        ['nama' => 'Eko', 'nim' => '24005', 'ipk' => 1.90],
    ];

    $data = collect($mahasiswa)->firstWhere('nim', $nim);

    if (!$data) {
        abort(404);
    }

    return view('mahasiswa.detail', compact('data'));
}
}