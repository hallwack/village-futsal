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
