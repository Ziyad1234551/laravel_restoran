@extends('admin.layout')

@section('content')
<div class="w-full  h-[70vh] flex justify-center items-center">
    <form action="{{url("editTable",$table->id)}}" method="POST" enctype="multipart/form-data"  class="w-[600px] bg-white shadow-xl px-8 rounded-lg py-4">
        @if (session()->has("status"))
        <div class="flex py-4 rounded-lg px-4 bg-red-600 text-white text-2xl font-bold">
            <h1>{{session()->get("status")}}</h1>
        </div>
            
        @endif
        @csrf
        <h1 class="text-center text-4xl font-bold">Tambah Meja Makan</h1>
        <div class="my-4">
            <input type="text" class="w-full py-4 outline-none rounded-md border border-black px-4" name="name"
            placeholder="{{$table->name}}" id="">
        </div>
        <div class="my-4">
            <input type="text"
            placeholder="{{$table->status}}"
             class="w-full py-4 outline-none rounded-md border border-black px-4" name="status" id="">
        </div>
        <div class="my-4">
            <img src="{{asset("gambar/$table->gambar")}}" class="w-[80px] h-[80px] rounded-full object-cover border-[2px] border-white" alt="">
            <input type="file" class="w-full  py-4 outline-none rounded-md border border-black px-4" name="gambar" id="">
        </div>
        <div class="my-4">
            <button class="w-full py-4  bg-black rounded-md font-bold text-white">Tambah</button>
        </div>
    </form>
</div>
    
@endsection