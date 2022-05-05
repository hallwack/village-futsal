@extends('layouts.main')

@section('content')
<div class="flex flex-col w-full justify-center items-center container mx-auto my-12 space-y-8">
    <div class="flex flex-col w-full justify-center items-center container mx-auto my-4">
        <p class="text-slate-800/50 text-sm">Batas Akhir Pembayaran</p>
        <p class="text-secondary font-semibold text-xl">Senin, 27 Desember 2021 16.43</p>
    </div>
    <div class="w-3/5 divide-y-2 divide-slate-200 p-8 border rounded-md border-slate-200">
        <div class="flex flex-row justify-between items-center pb-8">
            <p class="text-xl font-semibold text-slate-800">Mandiri Virtual Account</p>
            <img src="{{ asset('img/icon/logo-mandiri.svg') }}" class="w-1/5" alt="mandiri-logo">
        </div>
        <div class="pt-8 flex flex-col space-y-4">
            <div class="flex flex-row justify-between">
                <div>
                    <p class="text-slate-800/70">Nomor Virtual Account</p>
                    <p class="text-slate-800 font-semibold text-xl" id="payment-number">8888881234567890</p>
                </div>
                <button class="text-primary flex flex-row items-center" onclick="copyText()">
                    Salin <span class="ml-4"><img src="{{ asset('img/icon/copy-icon.svg') }}" alt="copy-icon"></span>
                </button>
            </div>
            <div>
                <p class="text-slate-800/70">Total Bayar</p>
                <p class="text-slate-800 font-semibold text-xl">Rp. 80.000</p>
            </div>
        </div>
    </div>
    <a href="#" class="font-semibold text-lg bg-secondary rounded-md py-3 px-6 text-white">Konfirmasi Pembayaran</a>
    <div class="w-full flex flex-col items-center space-y-8">
        <h2 class="text-left text-slate-800 text-xl font-semibold">Cara Pembayaran</h2>
        <div class="w-3/5 flex flex-col space-y-4">
            <div class="divide-y-2 divide-slate-200 p-8 border rounded-md border-slate-200">
                <div class="flex flex-row justify-between items-center pb-8">
                    <p class="text-xl font-semibold text-slate-800">ATM Mandiri</p>
                    <img src="{{ asset('img/icon/dropdown-icon.svg') }}" class="w-6" alt="dropdown-icon">
                </div>
                <div class="p-8 flex flex-col space-y-4">
                    <ol class="list-decimal text-slate-800">
                        <li>Masukkan kartu ATM dan PIN</li>
                        <li>Pilih menu "Bayar/Beli"</li>
                        <li>Pilih menu "Lainnya" hingga menemukan menu "Multipayment"</li>
                        <li>Masukkan kode Village Futsal (88888), lalu pilih tombol "Benar"</li>
                        <li>Masukkan nomor virtual account <span class="font-semibold">8888881234567890</span>, lalu
                            pilih tombol "Benar"</li>
                        <li>Masukkan angka "1" untuk memilih tagihan, lalu pilih "Ya"</li>
                        <li>Akan muncul konfirmasi pembayaran, pilih tombol "Ya"</li>
                        <li>Simpan struk sebagai bukti pembayaran</li>
                    </ol>
                </div>
            </div>
            <div class="divide-y-2 divide-slate-200 p-8 border rounded-md border-slate-200">
                <div class="flex flex-row justify-between items-center pb-8">
                    <p class="text-xl font-semibold text-slate-800">Mandiri Internet Banking / Livin' By Mandiri</p>
                    <img src="{{ asset('img/icon/dropdown-icon.svg') }}" class="w-6" alt="dropdown-icon">
                </div>
                <div class="p-8 flex flex-col space-y-4">
                    <ol class="list-decimal text-slate-800">
                        <li>Login Livin' By Mandiri dengan memasukkan Username dan Password</li>
                        <li>Pilih menu "Pembayaran"</li>
                        <li>Pilih menu "Multipayment"</li>
                        <li>Pilih penyedia jasa "Village Futsal"</li>
                        <li>Masukkan nomor virtual account <span class="font-semibold">8888881234567890</span> dan
                            nominal yang akan dibayarkan, lalu pilih "Lanjut"</li>
                        <li>Setelah muncul tagihan, pilih "Konfirmasi"</li>
                        <li>Masukkan PIN</li>
                        <li>Transaksi selesai, simpan bukti pembayaran Anda</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom-script')
<script>
    function copyText() {
        var paymentNum = document.getElementById('payment-number').innerHTML;
        navigator.clipboard.writeText(paymentNum);
    }

</script>
@endpush
