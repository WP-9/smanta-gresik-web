<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenFileController extends Controller
{
    public function openFileBuku1() {
        return view('components.files.open', [
            'title' => 'HTML 5 Notes For Professional',
            'file' => 'files/HTML5NotesForProfessionals.pdf#toolbar=0'
        ]);
    }

    public function openFileBuku2() {
        return view('components.files.open', [
            'title' => 'CSS Notes For Professional',
            'file' => 'files/CSSNotesForProfessionals.pdf#toolbar=0'
        ]);
    }
}
