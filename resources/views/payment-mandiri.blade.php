<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Village Futsal</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="flex flex-col min-h-screen h-full items-center justify-start">
    <nav class="w-full border-b-2 border-b-slate-200">
        <div class="flex flex-row container mx-auto items-center justify-between py-8">
            <img src="{{ asset('img/icon/Logo.svg') }}" class="object-cover" />
            <div class="flex flex-row items-center space-x-8">
                <a class="font-medium text-lg">Home</a>
                <a class="text-slate-800/70 hover:text-slate-800 text-lg">Booking</a>
                <a class="text-slate-800/70 hover:text-slate-800 text-lg">Cara Booking</a>
                <a class="text-slate-800/70 hover:text-slate-800 text-lg">Kontak</a>
                <a class="flex flex-row space-x-3 items-center">
                    <img src="{{ asset('img/adam.jpg') }}" class="rounded-full w-12 h-12 object-cover" />
                    <p class="text-slate-800/70 hover:text-slate-800 text-lg">Raihan Adam</p>
                    <img src="{{ asset('img/icon/dropdown-icon.svg') }}" />
                </a>
                <a
                    class="font-semibold text-lg py-3 px-6 rounded-lg border-2 border-slate-500/70 text-slate-500">Masuk</a>
                <a class="font-semibold text-lg bg-secondary rounded-lg py-3 px-6 text-white">Daftar</a>
            </div>
        </div>
    </nav>
    <div class="flex flex-col w-full justify-center items-center container mx-auto my-12 space-y-8">
        <div class="flex flex-col w-full justify-center items-center container mx-auto my-4">
            <p class="text-slate-800/50 text-sm">Batas Akhir Pembayaran</p>
            <p class="text-secondary font-semibold text-xl">Senin, 27 Desember 2021 16.43</p>
        </div>
        <div class="w-3/5 divide-y-2 divide-slate-200 p-8 border rounded-md border-slate-200">
            <div class="flex flex-row justify-between items-center pb-8">
                <p class="text-xl font-semibold text-slate-800">Mandiri Virtual Account</p>
                <img src="{{ asset('img/icon/logo-mandiri.svg') }}" class="w-1/5" alt="bang mandiri">
            </div>
            <div class="pt-8 flex flex-col space-y-4">
                <div class="flex flex-row justify-between">
                    <div>
                        <p class="text-slate-800/70">Nomor Virtual Account</p>
                        <p class="text-slate-800 font-semibold text-xl" id="payment-number">8888881234567890</p>
                    </div>
                    <button class="text-primary flex flex-row items-center" onclick="copyText()">
                        Salin <span class="ml-4"><img src="{{ asset('img/icon/copy-icon.svg') }}" alt="copy"></span>
                    </button>
                </div>
                <div>
                    <p class="text-slate-800/70">Total Bayar</p>
                    <p class="text-slate-800 font-semibold text-xl">Rp. 80.000</p>
                </div>
            </div>
        </div>
        <a class="font-semibold text-lg bg-secondary rounded-md py-3 px-6 text-white">Konfirmasi Pembayaran</a>
        <div class="w-full flex flex-col items-center space-y-8">
            <h2 class="text-left text-slate-800 text-xl font-semibold">Cara Pembayaran</h2>
            <div class="w-3/5 flex flex-col space-y-4">
                <div class="divide-y-2 divide-slate-200 p-8 border rounded-md border-slate-200">
                    <div class="flex flex-row justify-between items-center pb-8">
                        <p class="text-xl font-semibold text-slate-800">ATM Mandiri</p>
                        <img src="{{ asset('img/icon/dropdown-icon.svg') }}" class="w-6" alt="bang mandiri">
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
                        <img src="{{ asset('img/icon/dropdown-icon.svg') }}" class="w-6" alt="bang mandiri">
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
    <div class="w-full bg-primary/5 border-t-2 border-t-slate-200">
        <div class="flex flex-row container mx-auto items-start justify-between py-12 text-primary">
            <div class="flex flex-col space-y-8 basis-1/4">
                <img src="{{ asset('img/icon/Logo.svg') }}" class="object-cover w-48" />
                <p>
                    Jalan A.H. Nasution No. 105, Cipadung, Cibiru, Kota Bandung, Jawa Barat 40614
                </p>
            </div>
            <div class="flex flex-col basis-1/4">
                <h2 class="font-semibold text-xl mb-2">Informasi</h2>
                <a class="mb-1">Cara Booking</a>
                <a>FAQ</a>
            </div>
            <div class="flex flex-col basis-1/4">
                <h2 class="font-semibold text-xl mb-2">Kontak Kami</h2>
                <p class="mb-1">Weekdays & Weekend (09.00 - 22.00)</p>
                <p class="inline-flex items-center mb-1"><span class="mr-4"><img
                            src="{{ asset('img/icon/phone-icon.svg') }}" /></span>081278780940</p>
                <p class="inline-flex items-center mb-1"><span class="mr-4"><img
                            src="{{ asset('img/icon/whatsapp-icon.svg') }}" /></span>081278780940</p>
            </div>
            <div class="flex flex-col basis-1/4">
                <h2 class="font-semibold text-xl mb-2">Follow Us</h2>
                <div class="flex flex-row space-x-4">
                    <a><img src="{{ asset('img/icon/facebook-icon.svg') }}" /></a>
                    <a><img src="{{ asset('img/icon/instagram-icon.svg') }}" /></a>
                    <a><img src="{{ asset('img/icon/twitter-icon.svg') }}" /></a>
                </div>
            </div>
        </div>
    </div>
    <footer class="w-full bg-primary/5 border-t-2 border-t-slate-200 text-center text-primary py-4 text-sm">
        ©{{ date('Y') }} Village Futsal. All Rights Reserved
    </footer>

    <script>
        function copyText() {
            var paymentNum = document.getElementById('payment-number').innerHTML;
            navigator.clipboard.writeText(paymentNum);
        }

    </script>
</body>

</html>
