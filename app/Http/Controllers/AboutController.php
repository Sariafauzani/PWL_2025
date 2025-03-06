<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(): string
    {
        $nama = "Saria Fauzani";
        $nim = "2341760178";
        return "Nama: $nama <br> NIM: $nim";
    }
}
