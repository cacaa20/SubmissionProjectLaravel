@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>

    <p>Nama: {{ $data['nama'] }}</p>
    <p>NIM: {{ $data['nim'] }}</p>
    <p>IPK: {{ number_format($data['ipk'], 2) }}</p>

    <a href="{{ route('mahasiswa.daftar') }}">Kembali ke Daftar Mahasiswa</a>
@endsection