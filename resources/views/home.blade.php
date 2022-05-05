@extends('layouts.main')

@section('content')
<div class="flex flex-row w-full items-center justify-center container mx-auto my-32">
    <div class="w-1/2 flex flex-col space-y-8">
        <p class="font-bold text-primary text-5xl w-[500px] leading-relaxed">Booking Lapangan Futsal dengan <span
                class="text-secondary">Cepat</span> dan <span class="text-secondary">Mudah</span></p>
        <p class="text-slate-800/60 w-[400px] font-medium">Kamu ga perlu repot lagi datang buat booking. Booking
            lapangan udah bisa dari website ini aja.</p>
        <form class="flex flex-row items-center justify-center border p-4 w-fit space-x-8 rounded-lg">
            <div class="flex flex-col">
                <label for="email" class="text-slate-800 mb-2">Tanggal</label>
                <input type="date" id="email" class="form-input rounded-md border-0 text-slate-800 text-lg p-0" />
            </div>
            <div class="flex flex-col">
                <label for="email" class="text-slate-800 mb-2">Lapangan</label>
                <select class="form-select border-0">
                    <option>Lapangan 1</option>
                    <option>Lapangan 2</option>
                    <option>Lapangan 3</option>
                </select>
            </div>
            <button
                class="flex flex-row font-semibold text-xl bg-secondary rounded-lg py-3 px-6 h-fit text-white items-center justify-center">
                <span class="inline-block items-center mr-3">
                    <img src="{{ asset('img/icon/search-icon.svg') }}" alt="search-icon" />
                </span>Cari
            </button>
        </form>
    </div>
    <img src="{{ asset('img/hero-image.png') }}" class="w-1/2 object-cover" alt="hero-image" />
</div>
<div class="bg-primary/5 w-full h-full">
    <div class="flex flex-col items-center justify-center container mx-auto py-24 space-y-12">
        <h1 class="text-primary text-5xl font-bold">Caranya?</h1>
        <div class="flex flex-row space-x-12">
            <div class="w-full h-48 flex flex-row space-x-16">
                <div class="space-y-2 text-primary/50">
                    <p class="text-7xl font-bold">01</p>
                </div>
                <div class="flex flex-col justify-between">
                    <p class="text-xl font-medium text-slate-800">Cari lapangan sesuai tanggal yang kamu mau.</p>
                    <img src="{{ asset('img/step-1.png') }}" class="w-24" alt="first-step" />
                </div>
            </div>
            <div class="w-full h-48 flex flex-row space-x-8">
                <div class="space-y-2 text-primary/50">
                    <p class="text-7xl font-bold">02</p>
                </div>
                <div class="flex flex-col justify-between">
                    <p class="text-xl font-medium text-slate-800">Pilih jadwal yang tersedia.</p>
                    <img src="{{ asset('img/step-2.png') }}" class="w-40" alt="second-step" />
                </div>
            </div>
            <div class="w-full h-48 flex flex-row space-x-8">
                <div class="space-y-2 text-primary/50">
                    <p class="text-7xl font-bold">03</p>
                </div>
                <div class="flex flex-col justify-between">
                    <p class="text-xl font-medium text-slate-800">Booking dan bayar secara online.</p>
                    <img src="{{ asset('img/step-3.png') }}" class="w-16" alt="third-step" />
                </div>
            </div>
            <div class="w-full h-48 flex flex-row space-x-8">
                <div class="space-y-2 text-primary/50">
                    <p class="text-7xl font-bold">04</p>
                </div>
                <div class="flex flex-col justify-between">
                    <p class="text-xl font-medium text-slate-800">Selesai!</p>
                    <img src="{{ asset('img/step-4.png') }}" class="w-16" alt="fourth-step" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto flex flex-row w-full h-full items-center justify-center py-24">
    <div class="w-1/2 flex items-center justify-center">
        <img src="{{ asset('img/about-image.png') }}" class="object-cover w-96" alt="about-image" />
    </div>
    <div class="w-1/2 flex flex-col space-y-8">
        <h1 class="font-bold text-5xl text-primary">Tentang Kami</h1>
        <p class="text-slate-800">
            Kami adalah tempat penyewaan lapangan futsal yang berada di Kota Bandung. Kami menggunakan rumput
            sintetis impor yang kualitasnya tidak perlu diragukan lagi. Kami telah dipercaya oleh banyak orang
            sebagai salah satu tempat penyewaan lapangan futsal terbaik di Kota Bandung.
        </p>
        <div class="flex flex-row h-full space-x-8">
            <div class="flex flex-col space-y-2">
                <p class="text-secondary font-bold text-3xl">6 Tahun</p>
                <p class="text-slate-800/60 text-sm">Tahun</p>
            </div>
            <div class="flex flex-col space-y-2">
                <p class="text-secondary font-bold text-3xl">360+</p>
                <p class="text-slate-800/60 text-sm">Ulasan</p>
            </div>
            <div class="flex flex-col space-y-2">
                <p class="text-secondary font-bold text-3xl">4.8</p>
                <div class="flex flex-row space-x-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-primary" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-primary" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-primary" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-primary" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-primary/60" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
