@extends('layouts.main')

@section('content')
<div class="flex flex-row py-8 w-full border-b-2 border-b-slate-200">
    {{ Breadcrumbs::render('profile') }}
</div>
<div class="flex flex-row w-full justify-center container mx-auto my-12 space-x-8">
    @include('partials.aside-profile')
    <form class="w-3/4 h-fit flex flex-col p-8 space-y-8 rounded-lg">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-3xl text-slate-800">Ubah Profile</h2>
        </div>
        <div class="grid grid-cols-2 gap-8">
            <div class="flex flex-col w-full space-y-8 p-8 rounded-lg border-2 border-slate-200  text-slate-800">
                <div class="flex flex-col items-start justify-start space-y-8">
                    <label for="img-input" class="font-medium text-xl text-slate-800">Avatar</label>
                    <img src="{{ asset('img/icon/upload-icon.svg') }}"
                        class="bg-slate-200 p-10 object-cover rounded-full" id="imgOutput" alt="profile-photo" />
                    <div class="flex flex-col">
                        <input type="file" id="img-input"
                            class="file:py-2 file:px-3 file:bg-white file:border-2 file:rounded-md file:text-primary file:border-primary file:shadow-none text-slate-800 file:mr-4"
                            placeholder="Pilih File" />
                        <span class="text-sm font-medium mt-4 text-slate-400">Format file .jpg, .jpeg, atau
                            .png</span>
                    </div>
                </div>
                <div class="flex flex-col">
                    <label for="name" class="font-medium text-xl text-slate-800 mb-2">Nama</label>
                    <input type="name" id="name"
                        class="form-input rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg" />
                </div>
                <div class="flex flex-col">
                    <label for="email" class="font-medium text-xl text-slate-800 mb-2">Email</label>
                    <input type="email" id="email"
                        class="form-input rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-slate-800 text-lg disabled:bg-primary/25 disabled:text-slate-800/70"
                        value="raihan@email.com" disabled />
                </div>
                <div class="flex flex-col">
                    <label for="phone_number" class="font-medium text-xl text-slate-800 mb-2">No HP</label>
                    <input type="phone_number" id="phone_number"
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

@push('custom-script')
<script>
    var input = document.getElementById('img-input')
    input.onchange = event => {
        const [file] = input.files
        if (file) {
            var output = document.getElementById('imgOutput')
            output.classList += " w-24 h-24"
            output.classList.remove('p-10')
            output.src = URL.createObjectURL(file)
        }
    }

</script>
@endpush
