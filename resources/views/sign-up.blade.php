@extends('layouts.login-register')

@section('content')
<div class="flex flex-col items-center justify-center w-full mt-16">
    <p class="font-bold text-4xl text-primary mb-8">Daftar Akun Baru</p>
    <p class="text-slate-800 mb-8">Lengkapi formulir di bawah ini menggunakan data Anda yang valid.</p>
    <form class="flex flex-col items-center justify-start border border-gray-200 rounded-lg p-12" action="{{ route('register') }}" method="POST">
        @csrf
        <div class="flex flex-col items-center justify-start space-y-5 mb-8">
            <div class="flex flex-col w-96">
                <label for="name" class="text-slate-800 mb-2">Nama</label>
                <input type="text" id="name" name="name" class="rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg @error('name') border-red-500/70 focus:border-red-400 focus:ring-red-500/50 @enderror" value="{{ old('name') }}" />
                @error('name')
                <div class="mt-1">
                    <span class="text-red-500 text-sm font-medium">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="flex flex-col w-96">
                <label for="email" class="text-slate-800 mb-2">Email</label>
                <input type="email" id="email" name="email" class="rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg @error('email') border-red-500/70 focus:border-red-400 focus:ring-red-500/50 @enderror" value="{{ old('email') }}" />
                @error('email')
                <div class="mt-1">
                    <span class="text-red-500 text-sm font-medium">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="flex flex-col w-96">
                <label for="password" class="text-slate-800 mb-2">Password</label>
                <input type="password" id="password" name="password" class="rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg @error('password') border-red-500/70 focus:border-red-400 focus:ring-red-500/50 @enderror" value="{{ old('password') }}" />
                @error('password')
                <div class="mt-1">
                    <span class="text-red-500 text-sm font-medium">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="flex flex-col w-96">
                <label for="password_confirmation" class="text-slate-800 mb-2">Confirmation Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg @error('passwordc_confirmation') border-red-500/70 focus:border-red-400 focus:ring-red-500/50 @enderror" value="{{ old('password_confirmation') }}" />
                @error('password_confirmation')
                <div class="mt-1">
                    <span class="text-red-500 text-sm font-medium">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="flex flex-col w-96">
                <label for="phone_number" class="text-slate-800 mb-2">No Handphone</label>
                <input type="text" id="phone_number" name="phone_number" class="rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg @error('phone_number') border-red-500/70 focus:border-red-400 focus:ring-red-500/50 @enderror" value="{{ old('phone_number') }}" />
                @error('phone_number')
                <div class="mt-1">
                    <span class="text-red-500 text-sm font-medium">{{ $message }}</span>
                </div>
                @enderror
            </div>
        </div>
        <button type="submit" class="bg-secondary rounded w-full text-white py-2 text-xl font-semibold mt-4 mb-4">Lanjut</button>
        <p class="text-slate-800">Sudah punya akun? <a href="{{ route('login') }}" class="underline text-primary">Masuk</a></p>
    </form>
</div>
@endsection
