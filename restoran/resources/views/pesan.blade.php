<div class="flex justify-center items-center my-[100px]">
    <form method="POST" action="{{url("pesan")}}"  class="w-[600px] py-4 px-10 rounded-lg shadow-lg">
        @if (session()->has("pesan"))
        <div class="bg-red-600  rounded-lg w-full p-4">
            <h1 class="text-white font-bold text-4xl">{{session()->get("pesan")}}</h1>

        </div>
            
        @endif
        @csrf
        <h1 class="text-center text-5xl font-bold mb-8 ">Pesan Makanan</h1>
        <div class="my-4">
            <input type="text" name="name"  placeholder="masukan nama anda" class="w-full p-4 rounded-md outline-none border border-black">
        </div>
        <div class="my-4">
            <select name="table_id" id="" class="w-full  p-4 rounded-md outline-none border border-black">>
                @foreach ($tables as $item)
                <option value={{$item->id}}>{{$item->name}}</option>
                @endforeach

            </select>
        </div>
        <div class="my-4">
            <select name="makanan_id" id="" class="w-full px-4 py-4 rounded-md outline-none border border-black">>
                @foreach ($makanans as $item)
                <option value={{$item->id}}>{{$item->name}}</option>
                @endforeach

            </select>
        </div>
        <div class="my-4">
            <button class="w-full bg-red-600 py-4 rounded-lg text-white font-bold">Pesan </button>
        </div>
    </form>
</div>