@extends('layouts.main')

@section('content')
<div class="flex flex-row py-8 w-full border-b-2 border-b-slate-200">
    {{ Breadcrumbs::render('profile') }}
</div>
<div class="flex flex-row w-full justify-center container mx-auto my-12 space-x-8">
    @include('partials.aside-profile')
    <form class="w-3/4 h-fit flex flex-col p-8 space-y-8 rounded-lg">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-3xl text-slate-800">Ganti Password</h2>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <div class="flex flex-col w-full space-y-8 p-8 rounded-lg border-2 border-slate-200  text-slate-800">
                <div class="flex flex-col">
                    <label for="old_password" class="text-lg text-slate-800 mb-2">Password Lama</label>
                    <input type="password" id="old_password"
                        class="form-input rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
                </div>
                <div class="flex flex-col">
                    <label for="new_password" class="text-lg text-slate-800 mb-2">Password Baru (min. 8
                        karakter)</label>
                    <input type="password" id="new_password"
                        class="form-input rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
                </div>
                <div class="flex flex-col">
                    <label for="confirm_password" class="text-lg text-slate-800 mb-2">Konfirmasi
                        Password Baru</label>
                    <input type="password" id="confirm_password"
                        class="form-input rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
                </div>
                <button type="submit"
                    class="font-semibold text-lg bg-secondary rounded-md py-3 px-6 text-white text-center">Simpan
                    Profile</button>
            </div>
        </div>
    </form>
</div>
@endsection
