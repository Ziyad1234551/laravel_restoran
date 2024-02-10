@extends('layouts.app')

@section('content')
<div class="w-full flex justify-center items-center h-[70vh]">
    <form action="{{route('login')}}" method="POST" class="w-[600px] py-4 px-8 border border-black rounded-lg">
        @csrf

        <h1 class="text-center text-5xl font-bold font-serif">Login</h1>
        <div class="my-4">
            <input type="email" placeholder="Masukan Email Anda" name="email" class="w-full py-4 px-4 rounded-md outline-none border border-black ">
        </div>
        @error('email')
        <strong class="text-red-600">{{$message}}</strong>
            
        @enderror
        <div class="my-4">
            <input type="password" placeholder="Masukan Password Anda" name="password" class="w-full py-4 px-4 rounded-md outline-none border border-black ">
        </div>
        @error('password')
        <strong class="text-red-600">{{$message}}</strong>
            
        @enderror
        <div class="my-4">
            <button class="w-full bg-black py-4 rounded-md text-white font-bold transition-all hover:shadow-lg cursor-pointer">Login</button>
        </div>
        <div class="my-4 flex  justify-between">
            <p>Tidak Punya Akun?</p>
            <a href="/register">Register</a>
            
        </div>
    </form>
</div>
@endsection
