<div class="w-full bg-primary/5 border-t-2 border-t-slate-200">
    <div class="flex flex-row container mx-auto items-start justify-between py-12 text-primary">
        <div class="flex flex-col space-y-8 basis-1/4">
            <img src="{{ asset('img/icon/Logo.svg') }}" class="object-cover w-48" alt="village-futsal-icon" />
            <p>
                Jalan A.H. Nasution No. 105, Cipadung, Cibiru, Kota Bandung, Jawa Barat 40614
            </p>
        </div>
        <div class="flex flex-col basis-1/4">
            <h2 class="font-semibold text-xl mb-2">Informasi</h2>
            <a href="#" class="mb-1">Cara Booking</a>
            <a href="#">FAQ</a>
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
                <a href="#"><img src="{{ asset('img/icon/facebook-icon.svg') }}" /></a>
                <a href="#"><img src="{{ asset('img/icon/instagram-icon.svg') }}" /></a>
                <a href="#"><img src="{{ asset('img/icon/twitter-icon.svg') }}" /></a>
            </div>
        </div>
    </div>
</div>
<footer class="w-full bg-primary/5 border-t-2 border-t-slate-200 text-center text-primary py-4 text-sm">
    ©{{ date('Y') }} Village Futsal. All Rights Reserved
</footer>
