@extends('layouts.login-register')

@section('content')
<div class="flex flex-col items-center justify-center w-full mt-16">
    <p class="font-bold text-4xl text-primary mb-8">Daftar Akun Baru</p>
    <p class="text-slate-800 mb-8">Lengkapi formulir di bawah ini menggunakan data Anda yang valid.</p>
    <form class="flex flex-col items-center justify-start border border-gray-200 rounded-lg p-12">
        <div class="flex flex-col items-center justify-start space-y-8 mb-8">
            <img src="{{ asset('img/icon/upload-icon.svg') }}" class="bg-slate-200 p-10 object-cover rounded-full"
                id="imgOutput" />
            <div class="flex flex-col items-center">
                <p class="text-lg font-bold text-slate-800">Raihan Adam</p>
                <p class="text-slate-800">hallwack.id@gmail.com</p>
            </div>
            <div class="flex flex-col">
                <input type="file" id="imgInput"
                    class="file:py-2 file:px-3 file:bg-white file:border-2 file:rounded-md file:text-primary file:border-primary file:shadow-none text-slate-800"
                    placeholder="Pilih File" />
                <span class="text-sm font-medium mt-2 text-slate-400">Format file .jpg, .jpeg, atau .png</span>
            </div>
        </div>
        <button type="submit"
            class="bg-secondary rounded w-full text-white py-2 text-xl font-semibold mt-4 mb-4">Daftar</button>
        <button type="submit"
            class="bg-transparent rounded w-full text-primary/60 py-2 border-2 border-primary/50 text-xl font-semibold mt-1 mb-4">Lewati</button>
    </form>
</div>
@endsection

@push('custom-script')
<script>
    var input = document.getElementById('imgInput')
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
