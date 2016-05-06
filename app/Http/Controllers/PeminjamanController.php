<?php

namespace App\Http\Controllers;

use App\Buku;
use App\Mahasiswa;
use App\Peminjaman;
use Illuminate\Http\Request;

use App\Http\Requests;
use Ramsey\Uuid\Uuid;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = \DB::table('tb_peminjaman')
            ->join('tb_buku', 'tb_peminjaman.id_buku', '=', 'tb_buku.id_buku')
            ->join('tb_mahasiswa', 'tb_peminjaman.npm', '=', 'tb_mahasiswa.npm')
            ->select(
                'tb_peminjaman.tanggal_batas_pengembalian',
                'tb_peminjaman.tanggal_peminjaman',
                'tb_peminjaman.id_peminjaman',
                'tb_mahasiswa.npm',
                'tb_mahasiswa.nama',
                'tb_mahasiswa.kelas',
                'tb_buku.judul_buku',
                'tb_buku.pengarang',
                'tb_buku.tahun_terbit',
                'tb_buku.penerbit',
                'tb_buku.nomor_rak_buku'
            )
            ->paginate(10);
        return view('peminjaman.index', ['peminjamans' => $peminjaman]);
    }

    public function tambahPeminjaman()
    {
        $mahasiswas = Mahasiswa::lists('nama', 'npm');
        $bukus = Buku::lists('judul_buku', 'id_buku');
        return view('peminjaman.create')
            ->with([
                'mahasiswas' => $mahasiswas,
                'bukus' => $bukus
            ]);
    }

    public function simpanPeminjaman(Request $request)
    {
        $peminjaman = new Peminjaman;

        $peminjaman->id_peminjaman = Uuid::uuid4();
        $peminjaman->tanggal_peminjaman = $request->tanggal_peminjaman;
        $peminjaman->tanggal_batas_pengembalian = $request->tanggal_batas_pengembalian;
        $peminjaman->npm = $request->mahasiswa;
        $peminjaman->id_buku = $request->buku;

        $peminjaman->save();

        return redirect('Peminjaman');
    }
}
