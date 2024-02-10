<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Pesan;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    public function pesan(Request $request){
        $pesan = new Pesan();
        $table = Table::find($request->table_id);
        $table->status = "Dipesan";
        $table->save();

        $pesan->table_id = $request->table_id;
        $pesan->makanan_id = $request->makanan_id;
        $pesan->name = $request->name;
        $pesan->save();
        return redirect()->back()->with("pesan","berhasil dipesan");


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()){

            if(Auth::user()->usertype === "0"){
                $tables = Table::all();
                $makanans = Makanan::all();
    
                return view('home',compact(["tables"],["makanans"]));
            }else{
                $jumlah_makanan = Makanan::count();
                $jumlah_pesan = Pesan::count();

                $jumlah_table = Table::count();
                return view("admin.home",compact(['jumlah_makanan','jumlah_table','jumlah_pesan']));
            }
        }
        else{
            $tables = Table::all();
            $makanans = Makanan::all();

            return view('home',compact(["tables"],["makanans"]));
        }

    }
}
