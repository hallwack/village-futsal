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
        {{ Breadcrumbs::render('booking') }}
    </div>
    <div class="flex flex-row w-full justify-center container mx-auto my-12">
        <h1 class="text-primary text-4xl font-bold">Booking</h1>
    </div>
    <div class="flex flex-row w-full justify-center container mx-auto my-8 space-x-8">
        <form class="w-1/4 h-fit flex flex-col border p-8 space-y-8 rounded-lg">
            <h2 class="font-semibold text-3xl text-slate-800">Cari Lapangan</h2>
            <div class="flex flex-col">
                <label for="email" class="text-slate-800 mb-2">Tanggal</label>
                <input type="date" id="email" class="form-input rounded-md border-0 text-slate-800 text-lg p-0" />
            </div>
            <div class="flex flex-col">
                <label for="email" class="text-slate-800 mb-2">Lapangan</label>
                <select class="form-select border-0">
                    <option>Lapangan 1</option>
                    <option>Lapangan 2</option>
                    <option>Lapangan 3</option>
                </select>
            </div>
            <button
                class="flex flex-row font-semibold text-xl bg-secondary rounded-lg py-3 px-6 h-fit text-white items-center justify-center">
                <span class="inline-block items-center mr-3">
                    <img src="{{ asset('img/icon/search-icon.svg') }}" />
                </span>Cari
            </button>
        </form>
        <form class="w-3/4 h-fit flex flex-col border p-8 space-y-8 rounded-lg">
            <h2 class="font-semibold text-3xl text-slate-800">Lapangan 1</h2>
            <div class="flex flex-row space-x-8 pb-8 border-b-2 border-b-slate-200">
                <div class="flex flex-row items-center space-x-4">
                    <div class="h-8 w-8 border-2 border-primary"></div>
                    <p>Tersedia</p>
                </div>
                <div class="flex flex-row items-center space-x-4">
                    <div class="h-8 w-8 bg-gray-300"></div>
                    <p>Sudah dibooking</p>
                </div>
                <div class="flex flex-row items-center space-x-4">
                    <div class="h-8 w-8 bg-primary"></div>
                    <p>Dipilih</p>
                </div>
            </div>
            <div class="flex flex-col py-4 border-b-2 border-b-slate-200">
                <h2 class="font-semibold text-2xl text-slate-800">Pagi</h2>
                <div class="grid grid-cols-6 gap-8 py-6">
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking4" class="relative">
                        <input type="radio" name="top-up-price" id="booking4" class="peer group sr-only" disabled />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 bg-gray-300 peer-checked:bg-primary text-gray-500 peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                </div>
            </div>
            <div class="flex flex-col py-4 border-b-2 border-b-slate-200">
                <h2 class="font-semibold text-2xl text-slate-800">Sore</h2>
                <div class="grid grid-cols-6 gap-8 py-6">
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking4" class="relative">
                        <input type="radio" name="top-up-price" id="booking4" class="peer group sr-only" disabled />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 bg-gray-300 peer-checked:bg-primary text-gray-500 peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                </div>
            </div>
            <div class="flex flex-col py-4 border-b-2 border-b-slate-200">
                <h2 class="font-semibold text-2xl text-slate-800">Malam</h2>
                <div class="grid grid-cols-6 gap-8 py-6">
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking" class="relative">
                        <input type="radio" name="top-up-price" id="booking" class="peer group sr-only" />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 border-2 border-primary/70 peer-checked:bg-primary text-primary peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                    <label for="booking4" class="relative">
                        <input type="radio" name="top-up-price" id="booking4" class="peer group sr-only" disabled />
                        <div
                            class="flex flex-col items-center justify-between rounded h-full px-8 py-4 bg-gray-300 peer-checked:bg-primary text-gray-500 peer-checked:text-white">
                            <p class="text-2xl font-medium">09.00</p>
                            <p class="">Rp 80K</p>
                        </div>
                    </label>
                </div>
            </div>
            <div class="flex flex-row space-x-4">
                <button
                    class="font-semibold text-xl w-fit bg-secondary rounded-lg py-3 px-6 h-fit text-white items-center justify-center">
                    Booking
                </button>
                <a
                    class="font-semibold text-xl py-3 w-fit px-6 rounded-lg border-2 border-primary/40 text-primary/70">Kembali</a>
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
</body>

</html>
