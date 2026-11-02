<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $info = [
            ['label' => 'Email',     'isi' => 'etjandinegara@student.ciputra.ac.id'],
            ['label' => 'Telepon',   'isi' => '+62 888-8888-8888'],
            ['label' => 'Lokasi',    'isi' => 'Makassar, Sulawesi Selatan'],
            ['label' => 'Instagram', 'isi' => '@evetjee._'],
        ];

        return view('contact', ['info' => $info]);
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'nama'  => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string',
        ], [
            'nama.required'  => 'Nama wajib diisi!',
            'email.required' => 'Email wajib diisi!',
            'email.email'    => 'Format email tidak valid.',
            'pesan.required' => 'Pesan wajib diisi!',
        ]);

        return redirect()->route('contact')
            ->with('sukses', 'Terima kasih, ' . $validated['nama'] . '! Pesanmu sudah diterima.');
    }
}
