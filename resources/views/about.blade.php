@extends('layout.layout')

@section('content')
    <section class="about">
        <div class="about-wrapper">

            <div class="about-text">
                <h1>Tentang Saya</h1>
                <p>
                    Halo, perkenalkan nama saya evelyn. Biasanya saya dipanggil eve.
                    Saya merupakan mahasiswi Universitas Ciputra Makassar dan sekarang sudah berkuliah di UCM selama 3 semester.
                    Saya mengambil jurusan informatika di bidang artificial intelligence.
                    Di semester pertama saya belajar basic programming, kemudian di semester kedua secara bertahap saya
                    belajar
                    web programming dan object-oriented programming sebagai tahap untuk saya mengambil mata kuliah
                    selanjutnya.
                    Sekarang di semester ketiga saya mengambil mata kuliah web development dengan basic web programming dan object-oriented programming.
                    Setiap mata kuliah yang saya pelajari secara bertahap membantu saya memahami mata kuliah di semester
                    berikutnya.
                </p>

                <h2>Skill</h2>
                <ul class="skill-list">
                    @foreach ($skills as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="about-foto">
                <h3>{{ $nama }}</h3>

                <img src="image/imt.jpg" alt="IMT" width="500">

            </div>

        </div>
    </section>
@endsection

