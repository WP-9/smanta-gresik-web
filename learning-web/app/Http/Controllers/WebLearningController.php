<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebLearningController extends Controller
{
    public function mainLearning() {
        return view('layouts.home', [
            'title' => 'Main Learning'
        ]);
    }

    public function freeBooksContent() {
        return view('components.content.freebook', [
            'title' => 'Buku Gratis'
        ]);
    }

    public function moduleContent() {
        return view('components.content.module', [
            'title' => 'Modul Sekolah'
        ]);
    }

    public function videoContent() {
        return view('components.content.video', [
           'title' => 'Konten Video'
        ]);
    }

}
