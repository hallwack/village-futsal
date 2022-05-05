@extends('layouts.main')

@section('content')
<div class="flex flex-row w-full py-8 border-b-2 border-b-slate-200">
    {{ Breadcrumbs::render('profile') }}
</div>
<div class="flex flex-row w-full justify-center container mx-auto my-12 space-x-8">
    @include('partials.aside-profile')
    <div class="w-3/4 h-fit flex flex-col p-8 space-y-8 rounded-lg">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-3xl text-slate-800">History Booking</h2>
            <p class="text-slate-800">Daftar history booking yang pernah kamu lakukan. Pilih salah satu untuk
                merilat
                invoice.</p>
        </div>
        <div class="grid grid-cols-3 gap-8">
            <a href="#" class="flex flex-col w-fit space-y-4 p-8 rounded-lg border-2 border-slate-200  text-slate-800">
                <h2 class="font-medium text-2xl">Lapangan 1</h2>
                <div class="flex flex-row space-x-16 justify-between">
                    <p>28/12/2021</p>
                    <p>10.00 WIB</p>
                </div>
            </a>
            <a href="#" class="flex flex-col w-fit space-y-4 p-8 rounded-lg border-2 border-slate-200  text-slate-800">
                <h2 class="font-medium text-2xl">Lapangan 1</h2>
                <div class="flex flex-row space-x-16 justify-between">
                    <p>28/12/2021</p>
                    <p>10.00 WIB</p>
                </div>
            </a>
            <a href="#" class="flex flex-col w-fit space-y-4 p-8 rounded-lg border-2 border-slate-200  text-slate-800">
                <h2 class="font-medium text-2xl">Lapangan 1</h2>
                <div class="flex flex-row space-x-16 justify-between">
                    <p>28/12/2021</p>
                    <p>10.00 WIB</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
