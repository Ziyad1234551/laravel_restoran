@extends('admin.layout')
@section('content')
    <style>
        th{
        padding: 10px 40px;
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
        padding: 10px 40px;
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
        <table>
            <thead>
                <tr>
                    <th>
                      name  
                    </th>
                    <th>
                        makanan  
                      </th>
                      <th>
                        gambar makanan  
                      </th>
                      <th>
                        meja  
                      </th>
                      <th>
gambar Meja                

</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($orders as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td class="">{{$item->table->name}}
                    </td>
                    <td>
                        <img src="gambar/{{$item->table->gambar}}" class="mx-auto" alt="">

                    </td>
                    <td>{{$item->makanan->name}}
                    </td>
                    <td>                        <img src="gambar/{{$item->makanan->gambar}}" class="mx-auto" alt="">
                    </td>



                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection