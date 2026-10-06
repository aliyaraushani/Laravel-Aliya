<?php

namespace App\Http\Controllers;

class MatakuliahController extends Controller
{
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    public function create()
    {
        return "Menampilkan form tambah matakuliah";
    }

    public function store()
    {
        return "Menyimpan data matakuliah";
    }

    public function show($kode = null)
    {
        if ($kode) {
            return "Anda mengakses matakuliah " . $kode;
        }

        return "Masukkan kode matakuliah!";
    }

    public function edit($kode)
    {
        return "Menampilkan form edit matakuliah " . $kode;
    }

    public function update($kode)
    {
        return "Mengupdate data matakuliah " . $kode;
    }

    public function destroy($kode)
    {
        return "Menghapus data matakuliah " . $kode;
    }
}
