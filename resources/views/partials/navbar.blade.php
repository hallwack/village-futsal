<nav class="w-full border-b-2 border-b-slate-200">
    <div class="flex flex-row container mx-auto items-center justify-between py-8">
        <img src="{{ asset('img/icon/Logo.svg') }}" class="object-cover" />
        <div class="flex flex-row items-center space-x-8">
            <a href="#" class="font-medium text-lg">Home</a>
            <a href="#" class="text-slate-800/70 hover:text-slate-800 text-lg">Booking</a>
            <a href="#" class="text-slate-800/70 hover:text-slate-800 text-lg">Cara Booking</a>
            <a href="#" class="text-slate-800/70 hover:text-slate-800 text-lg">Kontak</a>
            <div class="relative">
                <button class="flex flex-row space-x-3 items-center dropbtn" onclick="toggleDropdown()">
                    <img src="{{ asset('img/adam.jpg') }}" class="rounded-full w-12 h-12 object-cover" />
                    <p class="text-slate-800/70 hover:text-slate-800 text-lg">Raihan Adam</p>
                    <img src="{{ asset('img/icon/dropdown-icon.svg') }}" />
                </button>
                <div class="absolute hidden overflow-hidden mt-4 bg-white rounded drop-shadow-xl w-full dropdown-content"
                    id="dropdownNav">
                    <a href="#"
                        class="block px-4 py-3 text-slate-800/70 hover:bg-primary/40 hover:text-slate-800 transition duration-150">
                        Daftar Transaksi
                    </a>
                    <a href="#"
                        class="block px-4 py-3 text-slate-800/70 hover:bg-primary/40 hover:text-slate-800 transition duration-150">
                        Pengaturan Akun
                    </a>
                    <a href="#"
                        class="block px-4 py-3 text-slate-800/70 hover:bg-primary/40 hover:text-slate-800 transition duration-150">
                        Keluar
                    </a>
                </div>
            </div>
            <a href="#"
                class="font-semibold text-lg py-3 px-6 rounded-lg border-2 border-slate-500/70 text-slate-500">Masuk</a>
            <a href="#" class="font-semibold text-lg bg-secondary rounded-lg py-3 px-6 text-white">Daftar</a>
        </div>
    </div>
</nav>

@push('custom-script')
<script>
    function toggleDropdown() {
        if (document.getElementById("dropdownNav").classList.contains("hidden")) {
            document.getElementById("dropdownNav").classList.remove("hidden")
            document.getElementById("dropdownNav").classList.add("block")
        } else {
            document.getElementById("dropdownNav").classList.remove("block")
            document.getElementById("dropdownNav").classList.add("hidden")
        }
    }

</script>
@endpush
