@extends('layout.layout')

@section('content')
    <section class="blog">
        <h1>My Learning Journey</h1>

        <div class="blog-grid">
            @foreach ($artikel as $post)
                <article class="card">
                    <small>{{ $post['tanggal'] }}</small>
                    <h2>{{ $post['judul'] }}</h2>
                    <p>{{ $post['ringkasan'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
