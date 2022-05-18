@extends('layouts.login-register')

@section('content')
<div class="flex flex-col items-center justify-center w-full mt-16">
    <p class="font-bold text-4xl text-primary mb-12">Selamat Datang</p>
    <form class="flex flex-col items-center justify-start border border-gray-200 rounded-lg p-12">
        <div class="flex flex-col items-center justify-start space-y-8 mb-8">
            <div class="flex flex-col">
                <label for="email" class="text-slate-800 mb-2">Email</label>
                <input type="email" id="email"
                    class="form-input rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
            </div>
            <div class="flex flex-col">
                <label for="password" class="text-slate-800 mb-2">Password</label>
                <input type="password" id="password"
                    class="rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
            </div>
        </div>
        <a class="underline text-primary self-end mb-8">Saya Lupa Password</a>
        <button type="submit"
            class="bg-secondary rounded w-full text-white py-2 text-xl font-semibold mb-4">Masuk</button>
        <p class="text-slate-800">Belum punya akun? <a href="{{ route('register') }}"
                class="underline text-primary">Daftar</a></p>
    </form>
</div>
@endsection
