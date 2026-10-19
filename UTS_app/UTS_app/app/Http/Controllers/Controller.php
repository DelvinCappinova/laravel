<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'nim' => 'required|string',
            'nama' => 'required|string|max:255',
        ]);

        $nim = $request->input('nim');
        $nama = $request->input('nama');

        // Mengirim data hasil POST ke view result
        return view('result', compact('nim', 'nama'));
    }
}