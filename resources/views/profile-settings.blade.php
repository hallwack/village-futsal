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
    <div class="flex flex-row py-8 w-full border-b-2 border-b-slate-200">
        {{ Breadcrumbs::render('profile') }}
    </div>
    <div class="flex flex-row w-full justify-center container mx-auto my-12 space-x-8">
        <form class="w-1/4 h-fit flex flex-col border p-8 space-y-8 rounded-lg divide-y-2 divide-slate-200">
            <div class="flex flex-col space-y-8">
                <img src="{{ asset('img/adam.jpg') }}" class="bg-slate-200 h-32 w-32 object-cover rounded-full" />
                <div class="flex flex-col space-y-2">
                    <p class="text-2xl font-semibold text-slate-800">Abdul</p>
                    <p class="text-slate-800">abdul00@mymail.com</p>
                </div>
            </div>
            <div class="flex flex-col pt-8 space-y-8">
                <a href="#" class="flex flex-row space-x-6 items-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="fill-primary/90"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.4 0H1.6C0.716344 0 0 0.716344 0 1.6V4.8C0 5.68366 0.716344 6.4 1.6 6.4H22.4C23.2837 6.4 24 5.68366 24 4.8V1.6C24 0.716344 23.2837 0 22.4 0Z" />
                        <path
                            d="M9.2 8.7998H1.6C0.716344 8.7998 0 9.51615 0 10.3998V13.5998C0 14.4835 0.716344 15.1998 1.6 15.1998H9.2C10.0837 15.1998 10.8 14.4835 10.8 13.5998V10.3998C10.8 9.51615 10.0837 8.7998 9.2 8.7998Z" />
                        <path
                            d="M9.2 17.6006H1.6C0.716344 17.6006 0 18.3169 0 19.2006V22.4006C0 23.2842 0.716344 24.0006 1.6 24.0006H9.2C10.0837 24.0006 10.8 23.2842 10.8 22.4006V19.2006C10.8 18.3169 10.0837 17.6006 9.2 17.6006Z" />
                        <path
                            d="M18.3797 21.4285C18.4339 21.4854 18.499 21.5307 18.5712 21.5616C18.6434 21.5926 18.7212 21.6085 18.7997 21.6085C18.8783 21.6085 18.956 21.5926 19.0282 21.5616C19.1004 21.5307 19.1655 21.4854 19.2197 21.4285L23.8197 16.8685C23.8766 16.8144 23.9219 16.7492 23.9528 16.677C23.9838 16.6048 23.9997 16.5271 23.9997 16.4485C23.9997 16.37 23.9838 16.2923 23.9528 16.2201C23.9219 16.1479 23.8766 16.0827 23.8197 16.0285L19.1997 11.4285C19.1455 11.3717 19.0804 11.3264 19.0082 11.2954C18.936 11.2645 18.8583 11.2485 18.7797 11.2485C18.7012 11.2485 18.6234 11.2645 18.5512 11.2954C18.479 11.3264 18.4139 11.3717 18.3597 11.4285L17.5197 12.2685C17.4628 12.3227 17.4175 12.3879 17.3866 12.4601C17.3557 12.5323 17.3397 12.61 17.3397 12.6885C17.3397 12.7671 17.3557 12.8448 17.3866 12.917C17.4175 12.9892 17.4628 13.0544 17.5197 13.1085L18.9597 14.5485C19.0145 14.6044 19.0517 14.6752 19.0667 14.7521C19.0817 14.8289 19.0738 14.9085 19.044 14.9809C19.0141 15.0533 18.9637 15.1153 18.899 15.1594C18.8342 15.2034 18.758 15.2274 18.6797 15.2285H13.8397C13.6775 15.231 13.5221 15.2939 13.4037 15.4048C13.2854 15.5158 13.2126 15.6668 13.1997 15.8285V17.0285C13.2183 17.1884 13.2926 17.3366 13.4097 17.4471C13.5267 17.5576 13.679 17.6233 13.8397 17.6325H18.6997C18.778 17.6336 18.8542 17.6577 18.919 17.7017C18.9837 17.7457 19.0341 17.8078 19.064 17.8802C19.0938 17.9526 19.1017 18.0322 19.0867 18.109C19.0717 18.1859 19.0345 18.2566 18.9797 18.3125L17.5397 19.7525C17.4828 19.8067 17.4375 19.8719 17.4066 19.9441C17.3757 20.0163 17.3597 20.094 17.3597 20.1725C17.3597 20.2511 17.3757 20.3288 17.4066 20.401C17.4375 20.4732 17.4828 20.5384 17.5397 20.5925L18.3797 21.4285Z" />
                    </svg>
                    <p class="text-slate-800 font-semibold text-lg">Daftar Transaksi</p>
                </a>
                <a href="#" class="flex flex-row space-x-6 items-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="fill-gray-400"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_169_824)">
                            <path
                                d="M3.81901 8.76009C3.81901 6.00169 6.06548 3.76633 8.81277 3.76633C11.4735 3.76633 13.6588 5.86062 13.7993 8.4909C14.1921 8.10416 14.7307 7.86504 15.3242 7.86504H17.5729V6.97733C17.5729 6.64421 17.3028 6.37422 16.9698 6.37422H15.5344C15.4519 6.14182 15.3579 5.91486 15.2527 5.69429L16.2677 4.67929C16.5032 4.44374 16.5032 4.06188 16.2677 3.82633L13.7465 1.30515C13.5109 1.0696 13.1291 1.0696 12.8936 1.30515L11.8786 2.32015C11.658 2.21493 11.431 2.12097 11.1986 2.03843V0.603109C11.1986 0.270034 10.9286 0 10.5955 0H7.03007C6.69699 0 6.42696 0.270034 6.42696 0.603109V2.03849C6.19455 2.12097 5.96764 2.21498 5.74703 2.32021L4.73198 1.30521C4.49642 1.06965 4.11456 1.06965 3.87906 1.30521L1.35789 3.82633C1.12234 4.06188 1.12234 4.44374 1.35789 4.67929L2.37289 5.69429C2.26766 5.91486 2.1737 6.14182 2.09117 6.37422H0.655843C0.322768 6.37422 0.0527344 6.64426 0.0527344 6.97733V10.5427C0.0527344 10.8758 0.322768 11.1459 0.655843 11.1459H2.09122C2.1737 11.3783 2.26771 11.6052 2.37294 11.8258L1.35789 12.8409C1.12234 13.0764 1.12234 13.4583 1.35789 13.6938L3.87906 16.215C4.11461 16.4505 4.49648 16.4505 4.73198 16.215L5.74697 15.2C5.96759 15.3052 6.1945 15.3992 6.42691 15.4817V16.9171C6.42691 17.2501 6.69694 17.5202 7.03002 17.5202H7.81224V15.377C7.81224 14.7285 8.09794 14.1458 8.5496 13.7469C5.9144 13.6094 3.81901 11.4204 3.81901 8.76009Z" />
                            <path
                                d="M11.4093 9.48572C11.6446 9.25037 11.9245 9.07592 12.2298 8.9696C12.3511 6.98215 10.7725 5.33643 8.81522 5.33643C6.92551 5.33643 5.39355 6.86838 5.39355 8.7581C5.39355 10.6923 7.00065 12.2577 8.95959 12.1761C9.17334 11.6504 9.27223 11.6228 11.4093 9.48572Z" />
                            <path
                                d="M23.4519 14.7747H22.4617C22.3843 14.5521 22.2944 14.3352 22.1927 14.1252L22.8928 13.4251C23.1284 13.1895 23.1284 12.8077 22.8928 12.5721L20.9209 10.6002C20.8031 10.4824 20.6488 10.4235 20.4944 10.4235C20.3401 10.4235 20.1857 10.4824 20.068 10.6002L19.3678 11.3003C19.1578 11.1986 18.941 11.1088 18.7183 11.0313V10.0411C18.7183 9.70802 18.4483 9.43799 18.1152 9.43799H15.3265C14.9934 9.43799 14.7234 9.70802 14.7234 10.0411V11.0313C14.5008 11.1088 14.2839 11.1985 14.0739 11.3003L13.3737 10.6002C13.256 10.4824 13.1016 10.4235 12.9473 10.4235C12.7929 10.4235 12.6386 10.4824 12.5208 10.6002L10.5489 12.5721C10.3133 12.8077 10.3133 13.1895 10.5489 13.4251L11.249 14.1252C11.1473 14.3352 11.0574 14.5521 10.98 14.7747H9.98983C9.65675 14.7747 9.38672 15.0447 9.38672 15.3778V18.1665C9.38672 18.4996 9.65675 18.7696 9.98983 18.7696H10.98C11.0575 18.9922 11.1473 19.2091 11.2491 19.4191L10.5489 20.1192C10.3134 20.3548 10.3134 20.7366 10.5489 20.9722L12.5209 22.9441C12.6386 23.0619 12.793 23.1208 12.9473 23.1208C13.1016 23.1208 13.256 23.0619 13.3738 22.9441L14.0739 22.244C14.2839 22.3457 14.5008 22.4356 14.7234 22.513V23.5032C14.7234 23.8363 14.9935 24.1063 15.3265 24.1063H18.1153C18.4483 24.1063 18.7184 23.8363 18.7184 23.5032V22.5131C18.941 22.4356 19.1578 22.3458 19.3679 22.244L20.068 22.9442C20.1858 23.0619 20.3402 23.1208 20.4945 23.1208C20.6488 23.1208 20.8032 23.0619 20.9209 22.9442L22.8929 20.9722C23.1284 20.7367 23.1284 20.3548 22.8929 20.1193L22.1927 19.4191C22.2945 19.2091 22.3843 18.9923 22.4618 18.7697H23.452C23.785 18.7697 24.0551 18.4997 24.0551 18.1666V15.3778C24.055 15.0447 23.785 14.7747 23.4519 14.7747ZM16.7209 21.209C14.2744 21.209 12.284 19.2186 12.284 16.7721C12.284 14.3256 14.2744 12.3353 16.7209 12.3353C19.1673 12.3353 21.1577 14.3256 21.1577 16.7721C21.1577 19.2186 19.1673 21.209 16.7209 21.209Z" />
                            <path
                                d="M16.7182 19.6342C18.3004 19.6342 19.583 18.3517 19.583 16.7695C19.583 15.1874 18.3004 13.9048 16.7182 13.9048C15.1361 13.9048 13.8535 15.1874 13.8535 16.7695C13.8535 18.3517 15.1361 19.6342 16.7182 19.6342Z" />
                        </g>
                        <defs>
                            <clipPath id="clip0_169_824">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <p class="text-slate-800 text-lg">Pengaturan Profil</p>
                </a>
            </div>
            <div class="flex flex-col pt-8">
                <a href="#" class="flex flex-row space-x-6 items-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="fill-gray-400"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_169_830)">
                            <path
                                d="M23.9999 5.54664V18.294C23.9999 19.6295 23.1427 20.965 21.7959 21.4505L15.6733 23.7573C15.306 23.8786 14.9387 24 14.4488 24C13.8366 24 13.102 23.7573 12.4897 23.3931C12.2448 23.1502 11.8775 22.9074 11.755 22.6645H7.10192C5.26519 22.6645 3.67334 21.2077 3.67334 19.2653V18.0513C3.67334 17.5656 4.0407 17.08 4.65294 17.08C5.26519 17.08 5.63253 17.4442 5.63253 18.0513V19.2653C5.63253 20.1151 6.36722 20.7221 7.10192 20.7221H11.1427V3.23997H7.10192C6.24477 3.23997 5.63253 3.84699 5.63253 4.69682V5.91085C5.63253 6.39647 5.26519 6.88208 4.65294 6.88208C4.0407 6.88208 3.67334 6.39647 3.67334 5.91085V4.69682C3.67334 2.87576 5.14274 1.29751 7.10192 1.29751H11.755C11.9999 1.0547 12.2448 0.81189 12.4897 0.569082C13.4693 -0.0379388 14.5714 -0.159343 15.6733 0.204869L21.7959 2.51155C23.0203 2.87576 23.9999 4.21121 23.9999 5.54664Z" />
                            <path
                                d="M3.42857 15.38C3.18368 15.38 2.93878 15.2587 2.81633 15.1373L0.367344 12.7092C0.244896 12.5878 0.244896 12.4664 0.122448 12.4664C0.122448 12.345 0 12.2236 0 12.1022C0 11.9808 6.2585e-08 11.8594 0.122448 11.738C0.122448 11.6166 0.244896 11.4952 0.367344 11.4952L2.81633 9.0671C3.18368 8.70289 3.79593 8.70289 4.16327 9.0671C4.53062 9.43132 4.53062 10.0384 4.16327 10.4026L3.30612 11.2524H8.32655C8.81634 11.2524 9.30613 11.6166 9.30613 12.2236C9.30613 12.8306 8.81634 12.9521 8.32655 12.9521H3.18368L4.04082 13.8018C4.40817 14.166 4.40817 14.7731 4.04082 15.1373C3.91838 15.2587 3.67347 15.38 3.42857 15.38Z" />
                        </g>
                        <defs>
                            <clipPath id="clip0_169_830">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <p class="text-slate-800 text-lg">Keluar</p>
                </a>
            </div>
        </form>
        <form class="w-3/4 h-fit flex flex-col p-8 space-y-8 rounded-lg">
            <div class="flex flex-col space-y-4">
                <h2 class="font-semibold text-3xl text-slate-800">Ubah Profile</h2>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <div class="flex flex-col w-full space-y-8 p-8 rounded-lg border-2 border-slate-200  text-slate-800">
                    <div class="flex flex-col items-start justify-start space-y-8">
                        <label for="img-input" class="font-medium text-xl text-slate-800">Avatar</label>
                        <img src="{{ asset('img/icon/upload-icon.svg') }}"
                            class="bg-slate-200 p-10 object-cover rounded-full" id="imgOutput" />
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
</body>

</html>
