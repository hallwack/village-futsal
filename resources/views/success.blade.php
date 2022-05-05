@extends('layouts.main')

@section('content')
<div class="flex flex-col w-full justify-center items-center container mx-auto my-12 space-y-8">
    <div class="flex flex-col w-full justify-center items-center container mx-auto my-4 space-y-4">
        <h1 class="text-primary text-4xl font-bold">Booking Berhasil!</h1>
        <p class="text-slate-800">Screenshot layar ini sebagai bukti booking dan ditunjukkan saat main nanti.</p>
    </div>
    <div class="w-2/5 divide-y-2 divide-slate-200 p-8 border rounded-md border-slate-200">
        <div class="flex flex-row justify-between items-center pb-8">
            <p class="text-2xl font-semibold text-slate-800">Rincian Booking</p>
        </div>
        <div class="pt-8 flex flex-col space-y-4">
            <div class="flex flex-row justify-between">
                <p class="text-slate-800 text-lg">Nama</p>
                <p class="text-slate-800 text-lg">Abdul</p>
            </div>
            <div class="flex flex-row justify-between">
                <p class="text-slate-800 text-lg">Tanggal</p>
                <p class="text-slate-800 text-lg">28/12/2021</p>
            </div>
            <div class="flex flex-row justify-between">
                <p class="text-slate-800 text-lg">Lapangan</p>
                <p class="text-slate-800 text-lg">1</p>
            </div>
            <div class="flex flex-row justify-between">
                <p class="text-slate-800 text-lg">Jam</p>
                <p class="text-slate-800 text-lg">10.00</p>
            </div>
            <div class="flex flex-row justify-between pb-8">
                <p class="text-slate-800 text-lg">Status</p>
                <p class="text-slate-800 text-lg">Sudah dibayar</p>
            </div>
        </div>
        <div class="flex flex-row justify-between items-center pt-8">
            <p class="text-slate-800 text-lg">Total Bayar</p>
            <p class="text-slate-800 text-xl font-semibold">Rp 80.000</p>
        </div>
    </div>
    <a class="font-semibold text-lg bg-secondary rounded-md py-3 px-6 text-white">Kembali ke Home</a>
</div>
@endsection
