<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(): string
    {
        return "Selamat Datang";
    }

    public function about(): string
    {
        $nama = "Saria Fauzani";
        $nim = "2341760178";
        return "Nama: $nama <br> NIM: $nim";
    }

    public function articles($id): string
    {
        return "Halaman Artikel dengan Id $id";
    }
}