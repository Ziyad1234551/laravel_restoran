<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableRequest;
use App\Models\Makanan;
use App\Models\Pesan;
use App\Models\Table;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create_table(){
        return view("admin.table");
    }
    public function edit_makanan($id){
        $makanan = Makanan::find($id);
        return view("admin.edit_makanan",compact("makanan"));
    }
    public function hapusMakanan($id){
        $makanan = Makanan::find($id);
        $makanan->delete();
        return redirect()->back()->with("status","berhasil dihapus");
    }
    public function view_order(){
        $orders = Pesan::all();
        return view("admin.order",compact("orders"));
    }
    public function editTable($id){
        $table = Table::find($id);

        return view("admin.edit_table",compact("table"));
    }
    public function editMakanan(Request $request,$id){
        $makanan = Makanan::find($id);
        $makanan->name = $request->name;
        $makanan->status = $request->status;
        $makanan->harga = $request->harga;
        $gambar = time().".".$request->gambar->getClientOriginalExtension();
        $makanan->gambar = $gambar;
        $request->gambar->move("gambar",$gambar);
        $makanan->save();
        return redirect()->back()->with("status","berhasil di edit ");
    }
    public function view_makanan(){
        $makanans = Makanan::all();
        return view("admin.view_makanan",compact("makanans"));
    }
    public function viewMakanan(){
        return view("admin.makanan");
    }
    public function createTable(TableRequest $request){
        $table = new Table();

        $table->name = $request->name;
        $table->status = $request->status;

        $imageName = time().".".$request->gambar->getClientOriginalExtension();

        $request->gambar->move("gambar",$imageName);
        $table->gambar = $imageName;

        $table->save();
        return redirect()->back()->with("status","Data Meja Telah Ditambahkan");

    }
     public function edit_table(TableRequest $request,$id){
        $table =  Table::find($id);
        if ($table->image) {
            unlink("gambar/{{$table->image}}");
            # code...
        }
        $table->name = $request->name;
        $table->status = $request->status;

        $imageName = time().".".$request->gambar->getClientOriginalExtension();

        $request->gambar->move("gambar",$imageName);
        $table->gambar = $imageName;

        $table->save();
        return redirect()->back()->with("status","Data Meja Telah Diedit");

    }
    public function hapus_table($id){
        $table = Table::find($id);
        $table->delete();
        return redirect()->back()->with("status","meja dihapus");
    }
    public function createMakanan(Request $request){
        $makanan = new Makanan();
        $makanan->harga = $request->harga;
        $makanan->name = $request->name;
        $imageName = time().".".$request->gambar->getClientOriginalExtension();
        $makanan->gambar = $imageName;
        $request->gambar->move("gambar",$imageName);
        $makanan->status = $request->status;
        $makanan->save();
        return redirect()->back()->with("status","data makanan berhasil ditambahkan");
    }
    public function viewTable(){
        $tables = Table::all();
        return view("admin.view_table",compact("tables"));
    }
    //
}
