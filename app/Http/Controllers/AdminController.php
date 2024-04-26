<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('login');
    }
    public function ceklogin(Request $request){
        $a = new admin;
        $a= $a->where ('username',$request->input('username'))->where('password',$request->input('password'));
        if($a->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>$request->input('password') 
            ]);
        return redirect('layout');
    }
    }
    public function layout(){
        $a = new admin;
        return view("layout",['data'=>$a->all()]);
}
    public function pbarang(){
        $p = produk::all();
        return view("pbarang",['data'=>$p->all()]);
    }
    public function tambah(){
        return view('tambah');
     }
     public function tambahk(Request $request){
        $validated = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required'
        ]);
        $p = new produk();
        $p->create($request->all());
        return redirect('pbarang');
     }
     public function editp($id){
        $p = produk::select('*')->where('produkid', $id)->first();
        return view('edit',['data'=> $p]);
    }
    public function ubahbarang(Request $request, $id){
        $tes = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required'
        ]);
        $p = produk::where('produkid',$id)->update([
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'stok'=>$request->stok
        ]);
        return back()->with('pesan', 'Kelas berhasil diupdate');
    }
     
}
    
