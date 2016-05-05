<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

use App\Http\Requests;
use Ramsey\Uuid\Uuid;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::paginate(10);
        return view('buku.index', ['bukus' => $buku]);
    }

    public function tambahBuku()
    {
        return view('buku.create');
    }

    public function simpanBuku(Request $request)
    {
        $buku = new Buku;

        $buku->id_buku = Uuid::uuid4();
        $buku->judul_buku = $request->judul_buku;
        $buku->pengarang = $request->pengarang;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->penerbit = $request->penerbit;
        $buku->jumlah_buku = $request->jumlah_buku;
        $buku->nomor_rak_buku = $request->nomor_rak_buku;

        $buku->save();

        return redirect('Buku');
    }
}
