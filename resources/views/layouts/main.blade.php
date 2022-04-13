<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Village Futsal</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="flex flex-col min-h-screen h-full items-center justify-start">
    <div class="w-full flex justify-center items-center border-b-2 border-b-slate-200">
        <img src="{{ asset('img/icon/Logo.svg') }}" class="object-cover py-8" />
    </div>
    <div class="flex flex-col items-center justify-center w-full mt-20">
        <p class="font-bold text-4xl text-primary mb-12">Selamat Datang</p>
        <form class="flex flex-col items-center justify-start border border-gray-200 rounded-lg p-12">
            <div class="flex flex-col items-center justify-start space-y-8 mb-8">
                <div class="flex flex-col">
                    <label for="email" class="mb-2">Email</label>
                    <input type="email" id="email" class="rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-primary text-lg" />
                </div>
                <div class="flex flex-col">
                    <label for="password" class="mb-2">Password</label>
                    <input type="password" id="password" class="rounded-md py-1.5 border-primary/50 focus:border-primary/80 focus:ring-1 focus:ring-primary text-primary text-lg" />
                </div>
            </div>
            <a class="underline text-primary self-end mb-8">Saya Lupa Password</a>
            <button type="submit" class="bg-secondary rounded w-full text-white py-2 text-xl font-semibold mb-4">Masuk</button>
            <p>Belum punya akun? <a class="underline text-primary">Daftar</a></p>
        </form>
    </div>
</body>

</html>
