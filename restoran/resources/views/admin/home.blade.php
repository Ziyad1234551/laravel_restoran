@extends('admin.layout')
@section('content')
<h1 class="text-center text-[55px] font-bold">Admin</h1>


<div class="flex my-[50px] justify-center gap-4 items-center">
    <div class="w-[300px] bg-green-600  cursor-pointer hover:scale-105 transition-all text-white h-auto py-4 rounded-lg justify-center flex flex-col text-5xl font-bold text-center gap-4">
        <h1 class="text-3xl" >jumlah makanan</h1>
        {{$jumlah_makanan}}
    </div>
    <div class="w-[300px] bg-red-600  cursor-pointer hover:scale-105 transition-all text-white h-auto py-4 rounded-lg justify-center flex flex-col text-5xl font-bold text-center gap-4">
        <h1 class="text-3xl" >jumlah meja</h1>
        {{$jumlah_table}}
    </div>
    <div class="w-[300px] cursor-pointer hover:scale-105 transition-all bg-yellow-600 text-white h-auto py-4 rounded-lg justify-center flex flex-col text-5xl font-bold text-center gap-4">
        <h1 class="text-3xl" >jumlah pesanan</h1>
        {{$jumlah_pesan}}
    </div>

</div>
    
@endsection