<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="flex">
        <div class="lg:w-[260px] w-[100px] px-4 bg-black h-[100vh]">
            <h1 class="text-2xl font-bold font-serif
            border-b border-white text-white text-center">Admin Restoran Kwetiau</h1>
            <div class="flex justify-center text-center my-6 gap-4 text-white">
                <a class="text-xl text-center font-sans font-bold" href="/">Home</a>

            </div>
             <div class="flex my-6 gap-4 text-white">
                <a class="text-xl text-center font-sans font-bold" href="/create_table">Tambah Meja Makan</a>
                
            </div>
            <div class="flex my-6 justify-center gap-4 text-white">
                <a class="text-xl text-center font-sans font-bold" href="/view_table">Lihat Meja Makan</a>
                
            </div>
            <div class="flex my-6 justify-center gap-4 text-white">
                <a class="text-xl text-center font-sans font-bold" href="/makanan">Lihat Menu Makanan</a>
                
            </div>
            <div class="flex my-6 justify-center gap-4 text-white">
                <a class="text-xl text-center font-sans font-bold" href="/view_makanan">Tambah Menu Makananan</a>
                
            </div>
            <div class="flex my-6 justify-center gap-4 text-white">
                <a class="text-xl text-center font-sans font-bold" href="/view_order">Lihat Pemesanan</a>
                
            </div>
        </div>
        <div class="flex w-full flex-col  items-center">
            <div class="flex lg:px-10 w-full  justify-end h-[100px] items-center">
                <form method="POST" action="{{route("logout")}}">
                    @csrf
                <button class="w-[100px] py-2 rounded-md cursor-pointer bg-red-600  text-white font-bold">Logout</button></form>
            </div>

            @yield('content')
        </div>
    </div>
</body>
</html>