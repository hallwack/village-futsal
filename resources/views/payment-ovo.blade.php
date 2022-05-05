@extends('layouts.main')

@section('content')
<div class="flex flex-col w-full justify-center items-center container mx-auto my-12 space-y-8">
    <div class="flex flex-col w-full justify-center items-center container mx-auto my-4">
        <p class="text-slate-800/50 text-sm">Batas Akhir Pembayaran</p>
        <p class="text-secondary font-semibold text-xl">Senin, 27 Desember 2021 16.43</p>
    </div>
    <img src="{{ asset('img/waiting-payment-image.png') }}" class="w-1/3" alt="waiting payment">
    <div class="flex flex-col justify-center items-center space-y-4">
        <p class="text-primary text-2xl font-semibold">Menunggu Pembayaran...</p>
        <p class="text-slate-800">Silakan cek aplikasi OVO, kemudian buka “Notifikasi” dan segera konfirmasi
            pembayaran dalam 55 detik.</p>
    </div>
</div>
@endsection
