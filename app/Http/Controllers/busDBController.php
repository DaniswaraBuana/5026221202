<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class busDBController extends Controller
{
    public function index1()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); // Hasilnya array 2D
        $bus = DB::table('bus')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('index1',['bus' => $bus]);

    }

    // method untuk menampilkan view form tambah pegawai
public function tambah1()
{

	// memanggil view tambah
	return view('tambah1');

}
// method untuk insert data ke table pegawai
public function store1(Request $request)
{
	// insert data ke table pegawai
	DB::table('bus')->insert([
		'merkbus' => $request->merk,
		'jumlahbus' => $request->jumlah,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/bus');

}
// method untuk edit data pegawai
public function edit1($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$bus = DB::table('bus')->where('kodebus',"=", $id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit1',['bus' => $bus]);

}
// update data pegawai
public function update1(Request $request)
{
	// update data pegawai
	DB::table('bus')->where('kodebus',$request->id)->update([
		'merkbus' => $request->merk,
		'jumlahbus' => $request->jumlah,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/bus');
}


// method untuk hapus data pegawai
public function hapus1($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('bus')->where('kodebus',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/bus');
}
public function cari1(Request $request)
	{
		// menangkap data pencarian
		$cari1 = $request->cari1;

    		// mengambil data dari table pegawai sesuai pencarian data
		$bus = DB::table('bus')
		->where('merkbus','like',"%".$cari1."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index1',['bus' => $bus]);

	}
}
