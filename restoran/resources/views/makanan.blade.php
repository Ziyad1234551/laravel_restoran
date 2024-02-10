<div>

    <h1 class="text-center text-5xl font-bold font-sans">Menu Makanan</h1>
    <div class="flex w-full justify-center my-[100px] gap-6">
        @foreach ($makanans as $item)
        <div class="w-[400px] cursor-pointer bg-white rounded-xl shadow-2xl px-6">
    
            <img src="{{asset("/gambar/{$item->gambar}")}}" class="w-[200px] h-[200px] rounded-full cursor-pointer transition-all hover:scale-105 mx-auto object-cover" alt="">
            <div class="my-4">
                <h1 class="text-2xl text-center font-bold my-2">{{$item->name}}</h1>
                <h4 class="text-2xl  my-2">Rp.{{$item->harga}}</h4>
    
                @if ($item->status ==="Tersedia")
                <p class="text-green-600 text-xl">{{$item->status}}</p>
                @else 
                <p class="text-red-600 text-xl">{{$item->status}}</p>
        
        
                    
                @endif
        </div>
            
        </div>
            
        @endforeach
    </div>
</div>