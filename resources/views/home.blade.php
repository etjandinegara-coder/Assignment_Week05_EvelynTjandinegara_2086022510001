@extends('layout.layout')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <p class="hero-greeting">Welcome to My Personal Portofolio</p>
            <h1>Getting to know one another and sharing experiences and knowledge <br>about technology, porgramming, and
                life.</h1>
            <a href="{{ route('blog') }}" class="btn">Read My Blog</a>

            <div class="hero-cards">
                <div class="hero-card">
                    <h3>Information About Me</h3>
                    <p>Getting to know a bit about me.</p>
                    <a href="{{ route('about') }}" class="btn-kecil">About</a>
                </div>

                <div class="hero-card">
                    <h3>My Contact Information</h3>
                    <p>Let’s be friends and connect.</p>
                    <a href="{{ route('contact') }}" class="btn-kecil">Contact</a>
                </div>
            </div>
        </div>
    </section>
@endsection
