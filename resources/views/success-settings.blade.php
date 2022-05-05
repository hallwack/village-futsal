@extends('layouts.main')

@section('content')
<div class="flex flex-col w-full justify-center items-center container mx-auto my-12 space-y-8">
    <img src="{{ asset('img/success-image.png') }}" class="w-1/4 mb-12" alt="success">
    <div class="flex flex-col w-full justify-center items-center container mx-auto my-4 space-y-4">
        <h1 class="text-primary text-4xl font-bold">[Subject] Berhasil Diperbarui!</h1>
        <p class="text-slate-800">[Subject] kamu telah berhasil diperbarui.</p>
    </div>
    <a class="font-semibold text-lg bg-secondary rounded-md py-3 px-6 text-white">Kembali</a>
</div>
@endsection
