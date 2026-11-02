<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $skills = ['CSS', 'Dart', 'HTML', 'Java', 'JavaScript', 'Laravel', 'MySQL', 'PHP', 'Python'];

        return view('about', ['nama' => 'Evelyn Tjandinegara', 'skills' => $skills]);
    }

    public function blog()
    {
        $artikel = [
            [
                'judul' => 'Belajar OOP in PHP',
                'tanggal' => '21 September 2026',
                'ringkasan' => 'Saya mulai belajar PHP dan hal-hal dasar yang saya pelajari. Saya juga belajar OOP di PHP.',
            ],
            [
                'judul' => 'Belajar MVC menggunakan PHP',
                'tanggal' => '25 September 2026',
                'ringkasan' => 'Saya belajar membuat aplikasi model-view-controller menggunakan php untuk pertama kalinya.',
            ],
            [
                'judul' => 'Menginstal dan menggunakan Laravel',
                'tanggal' => '28 September 2026',
                'ringkasan' => 'Sebelum dapat menggunakan Laravel, saya mengunduh beberapa perangkat pendukung seperti PHP dan composer. Selain itu, saya menggunakan XAMPP untuk mengelola database.',
            ],
            [
                'judul' => 'Belajar Blade',
                'tanggal' => '05 Oktober 2026',
                'ringkasan' => 'Saya belajar menggunakan blade yang merupakan template engine bawaan Laravel. Dengan fungsi membuat view dengan sintaks yang lebih sederhana.',
            ],
            [
                'judul' => 'Membuat Navbar dan Footer ',
                'tanggal' => '12 Oktober 2026',
                'ringkasan' => 'Saya membuat navbar dan footer dengan mengikuti step dari website readymadeui.com',
            ],
            [
                'judul' => 'Membuat Portofolio',
                'tanggal' => '24 Oktober 2026',
                'ringkasan' => 'Saya membuat website portofolio dengan empat halaman yang dapat diakses.',
            ],
        ];

        return view('blog', ['artikel' => $artikel]);
    }
}
