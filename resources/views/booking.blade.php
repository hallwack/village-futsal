@extends('layouts.main')

@section('content')
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
@endsection
