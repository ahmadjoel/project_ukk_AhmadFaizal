<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\pelanggan;
use App\Models\produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function layout(){
        $admin = Admin::count();
        $pelanggan = Pelanggan::count();
        $produk = Produk::count();

        return view('layout',['admins'=>$admin,'pelanggans'=>$pelanggan,'produks'=>$produk]);
    }
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
        return redirect('index');
    }
    }
    public function index(){
        $a = new admin;
        return view("index",['data'=>$a->all()]);
}
// CRUD BARANG
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
     public function edit($id){
        $k = produk::select('*')->where('produkid',$id)->get();
        return  view('edit',['data'=>$k->all()]);
    }
    public function ubah_barang(Request $request ,$id){
        $k = produk::where('produkid',$id)->update([
        'nama_produk'=>$request->nama_produk,
        'harga'=>$request->harga,
        'stok'=>$request->stok
        
        ]);
        return redirect('pbarang');
}
//END CRUD BARANG

//CRUD PELANGGAN
public function pelanggan(){
    $p = pelanggan::all();
    return view("pelanggan",['data'=>$p->all()]);
}
public function tambahpel(){
    return view('tambahpel');
 }
 public function editpel($id){
    $k = pelanggan::select('*')->where('pelanggan_id',$id)->get();
    return  view('editpel',['data'=>$k->all()]);
}
 public function tambahki(Request $request){
    $validated = $request->validate([
        'nama_pelanggan' => 'required',
        'alamat' => 'required',
        'nomor_telepon' => 'required'
    ]);
    $p = new pelanggan();
    $p->create($request->all());
    return redirect('pelanggan');
 }
 public function editi($id){
    $k = pelanggan::select('*')->where('pelanggan_id',$id)->get();
    return  view('editpel',['data'=>$k->all()]);
}
public function ubah_pelanggan(Request $request ,$id){
    $k = pelanggan::where('pelanggan_id',$id)->update([
    'nama_pelanggan'=>$request->nama_pelanggan,
    'Alamat'=>$request->Alamat,
    'nomor_telepon'=>$request->nomor_telepon
    
    ]);
    return redirect('pelanggan');
}
}
//END CRUD PELANGGAN
    
