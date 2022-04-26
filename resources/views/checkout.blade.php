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
    <div class="flex flex-row w-full py-8 border-b-2 border-b-slate-200">
        {{ Breadcrumbs::render('checkout') }}
    </div>
    <div class="flex flex-row w-full justify-center container mx-auto my-12">
        <h1 class="text-primary text-4xl font-bold">Checkout</h1>
    </div>
    <div class="flex flex-row w-full justify-center container mx-auto my-8 space-x-8">
        <form class="w-1/2 h-fit flex flex-col border p-8 space-y-8 rounded-lg">
            <h2 class="font-semibold text-3xl text-slate-800">Informasi Pemesan</h2>
            <p class="text-slate-800">Checkout dengan akun? <a href="#" class="text-primary underline">Masuk</a></p>
            <div class="flex flex-col space-y-8 border-b-2 border-b-slate-200 pb-12">
                <div class="flex flex-col">
                    <label for="name" class="text-slate-800 mb-2">Nama</label>
                    <input type="text" id="name"
                        class="form-input rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
                </div>
                <div class="flex flex-col">
                    <label for="email" class="text-slate-800 mb-2">Email</label>
                    <input type="email" id="email"
                        class="form-input rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
                </div>
                <div class="flex flex-col">
                    <label for="phone_number" class="text-slate-800 mb-2">No HP</label>
                    <input type="tel" id="phone_number"
                        class="form-input rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
                </div>
            </div>
            <div class="flex flex-col space-y-8 border-b-2 border-b-slate-200 pb-12">
                <h2 class="font-semibold text-3xl text-slate-800">Pilih Pembayaran</h2>
                <div class="grid grid-cols-2 gap-8">
                    <label for="mandiri-payment" class="relative">
                        <input type="radio" name="top-up-price" id="mandiri-payment" onclick="mandiriChecked()"
                            class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-center rounded h-full p-8 border-2 border-gray-300 peer-checked:bg-primary/25 peer-checked:border-primary/50">
                            <img src="{{ asset('img/icon/logo-mandiri.svg') }}" alt="">
                        </div>
                    </label>
                    <label for="ovo-payment" class="relative">
                        <input type="radio" name="top-up-price" id="ovo-payment" onclick="ovoChecked()"
                            class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full p-8 border-2 border-gray-300 peer-checked:bg-primary/25 peer-checked:border-primary/50">
                            <img src="{{ asset('img/icon/logo-ovo.svg') }}" alt="">
                        </div>
                    </label>
                </div>
                <div class="hidden" id="ovo-input">
                    <label for="ovo_number" class="text-slate-800 mb-2">No OVO</label>
                    <input type="tel" id="ovo_number"
                        class="form-input rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
                </div>
            </div>
            <button
                class="flex flex-row font-semibold text-xl bg-secondary rounded-lg py-3 px-6 h-fit text-white items-center justify-center">
                <span class="inline-block items-center mr-3">
                    <img src="{{ asset('img/icon/search-icon.svg') }}" />
                </span>Cari
            </button>
        </form>
        <form class="w-1/2 h-fit flex flex-col border p-8 space-y-8 rounded-lg">
            <h2 class="font-semibold text-3xl text-slate-800 border-b-2 border-b-slate-200 pb-8">Rincian Booking</h2>
            <div class="flex flex-col space-y-4 pb-8 border-b-2 border-b-slate-200 text-slate-800">
                <div class="flex flex-row items-center justify-between">
                    <p>Tanggal</p>
                    <p>Tersedia</p>
                </div>
                <div class="flex flex-row items-center justify-between">
                    <p>Lapangan</p>
                    <p>Sudah dibooking</p>
                </div>
                <div class="flex flex-row items-center justify-between">
                    <p>Jam</p>
                    <p>Dipilih</p>
                </div>
            </div>
            <div class="flex flex-row justify-between items-center text-slate-800">
                <h2 class="text-lg font-medium">Total bayar</h2>
                <p class="text-xl font-semibold">RP. 80.000</p>
            </div>
        </form>
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
        function ovoChecked() {
            if (document.getElementById("ovo-payment").checked == true) {
                document.getElementById('ovo-input').classList.remove('hidden')
                document.getElementById('ovo-input').classList.add('flex', 'flex-col')
            }
        }

        function mandiriChecked() {
            if (document.getElementById("mandiri-payment").checked == true) {
                document.getElementById('ovo-input').classList.remove('flex', 'flex-col')
                document.getElementById('ovo-input').classList.add('hidden')
            }
        }

    </script>
</body>

</html>
