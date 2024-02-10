@extends('admin.layout')

@section('content')
<style>
    th{
        padding: 10px 20px;
        background-color: red;
        color:white;
        font-weight: bold
    }
    tr{
        border : 1px solid black;
    }
    table{

        border-collapse: collapse;
        border :1px solid black;
    }
    td{
        padding: 10px 20px;
        border:1px solid black;
        border-radius: 10px;
       
    }
    img{
        width: 50px;
        object-fit: cover;
        border-radius: 100%;
    }
</style>
<div class="flex justify-center items-center w-full h-[70vh]">
    @if (session()->has("status"))
    <div class="bg-red-600 text-white text-4xl font-bold">
        <h1>

            {{session()->get('status')}}
        </h1>
    </div>
        
    @endif
    <table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Status</th>
        <th>Pemesan</th>
        <th>Gambar</th>
        <th>Edit</th>
        
        <th>Delete</th>





        </tr>    
    </thead>    
    <tbody>
        @foreach ($tables as $item)
            
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->name}}</td>
            <td> <img src="{{asset("/gambar/{$item->gambar}")}}" class="w-[80px] h-[80px] object-cover rounded-full" alt=""></td>

           

            <td><a href="/edit_table/{{$item->id}}" class="bg-green-600 px-8 py-4 rounded-lg text-white font-bold">Edit</a></td>
            <td><a href="/hapus_table/{{$item->id}}" onclick="return confirm('mau hapus?')" class="bg-red-600 px-8 py-4 rounded-lg text-white font-bold">Delete</a></td>
            
            
    
    
    
            </tr>    
            @endforeach
        </tbody> 
    </table>    
</div>    
@endsection