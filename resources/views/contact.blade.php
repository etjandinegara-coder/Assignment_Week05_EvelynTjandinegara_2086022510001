@extends('layout.layout')

@section('content')
    <section class="contact">

        @if (session('sukses'))
            <p class="alert sukses">{{ session('sukses') }}</p>
        @endif

        @if ($errors->any())
            <div class="alert error">
                <ul>
                    @foreach ($errors->all() as $pesanError)
                        <li>{{ $pesanError }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="contact-wrapper">

            <div class="info-card">
                <h2>Contact Information</h2>
                @foreach ($info as $item)
                    <div class="info-item">
                        <small>{{ $item['label'] }}</small>
                        <p>{{ $item['isi'] }}</p>
                    </div>
                @endforeach
            </div>

            <form method="POST" action="{{ route('contact.send') }}">
                @csrf

                <label for="nama">Your Name</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}">

                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}">

                <label for="pesan">Enter Your Message</label>
                <textarea id="pesan" name="pesan" rows="5">{{ old('pesan') }}</textarea>

                <button type="submit" class="btn-kirim">Kirim</button>
            </form>
    </section>
@endsection
