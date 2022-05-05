@extends('layouts.main')

@section('content')
<div class="flex flex-row w-full py-8 border-b-2 border-b-slate-200">
    {{ Breadcrumbs::render('profile') }}
</div>
<div class="flex flex-row w-full justify-center container mx-auto my-12 space-x-8">
    @include('partials.aside-profile')
    <div class="w-3/4 h-fit flex flex-col p-8 space-y-8 rounded-lg">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-3xl text-slate-800">Pengaturan Akun</h2>
            <p class="text-slate-800">Daftar history booking yang pernah kamu lakukan. Pilih salah satu untuk
                merilat
                invoice.</p>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <div class="flex flex-col w-full space-y-4 p-8 rounded-lg border-2 border-slate-200  text-slate-800">
                <h2 class="font-medium text-2xl">Profile</h2>
                <p>Ubah data profil kamu</p>
                <a href="#"
                    class="font-semibold text-center text-lg bg-transparent rounded-md py-3 px-6 text-primary/80 border-2 border-primary/50">Ubah
                    Profile</a>
            </div>
            <div class="flex flex-col w-full space-y-4 p-8 rounded-lg border-2 border-slate-200  text-slate-800">
                <h2 class="font-medium text-2xl">Password</h2>
                <p>Ganti kata sandi akunmu</p>
                <a href="#"
                    class="font-semibold text-center text-lg bg-transparent rounded-md py-3 px-6 text-primary/80 border-2 border-primary/50">Ganti
                    Kata Sandi</a>
            </div>
        </div>
    </div>
</div>
@endsection
