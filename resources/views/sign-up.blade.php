@extends('layouts.login-register')

@section('content')
<div class="flex flex-col items-center justify-center w-full mt-16">
    <p class="font-bold text-4xl text-primary mb-8">Daftar Akun Baru</p>
    <p class="text-slate-800 mb-8">Lengkapi formulir di bawah ini menggunakan data Anda yang valid.</p>
    <form class="flex flex-col items-center justify-start border border-gray-200 rounded-lg p-12">
        <div class="flex flex-col items-center justify-start space-y-8 mb-8">
            <div class="flex flex-col">
                <label for="name" class="text-slate-800 mb-2">Nama</label>
                <input type="email" id="name"
                    class="rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
            </div>
            <div class="flex flex-col">
                <label for="email" class="text-slate-800 mb-2">Email</label>
                <input type="email" id="email"
                    class="rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
            </div>
            <div class="flex flex-col">
                <label for="password" class="text-slate-800 mb-2">Password</label>
                <input type="password" id="password"
                    class="rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
            </div>
            <div class="flex flex-col">
                <label for="phone_number" class="text-slate-800 mb-2">No Handphone</label>
                <input type="text" id="phone_number"
                    class="rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
            </div>
        </div>
        <button type="submit"
            class="bg-secondary rounded w-full text-white py-2 text-xl font-semibold mt-6 mb-4">Daftar</button>
        <p class="text-slate-800">Sudah punya akun? <a href="#" class="underline text-primary">Masuk</a></p>
    </form>
</div>
@endsection
