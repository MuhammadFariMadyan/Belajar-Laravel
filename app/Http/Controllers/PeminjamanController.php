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
        $this->validate($request, [
            'tanggal_peminjaman' => 'required|date',
            'tanggal_batas_pengembalian' => 'required|date',
            'mahasiswa' => 'required',
            'buku' => 'required'
        ]);

        $peminjaman = new Peminjaman;

        $peminjaman->id_peminjaman = Uuid::uuid4();
        $peminjaman->tanggal_peminjaman = $request->tanggal_peminjaman;
        $peminjaman->tanggal_batas_pengembalian = $request->tanggal_batas_pengembalian;
        $peminjaman->npm = $request->npm;
        $peminjaman->id_buku = $request->id_buku;

        $peminjaman->save();

        return redirect('Peminjaman');
    }

    public function editPeminjaman($idPeminjaman)
    {
        $mahasiswas = Mahasiswa::lists('nama', 'npm');
        $bukus = Buku::lists('judul_buku', 'id_buku');

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
                'tb_buku.nomor_rak_buku',
                'tb_buku.id_buku'
            )
            ->where('id_peminjaman', $idPeminjaman)->first();

        return view('peminjaman.edit')
            ->with('peminjaman', $peminjaman)
            ->with([
                'mahasiswas' => $mahasiswas,
                'bukus' => $bukus
            ]);
    }

    public function updatePeminjaman(Request $request, $idPeminjaman)
    {

        $peminjaman = Peminjaman::where('id_peminjaman', $idPeminjaman)->firstOrFail();

        $this->validate($request, [
            'tanggal_peminjaman' => 'required|date',
            'tanggal_batas_pengembalian' => 'required|date',
            'npm' => 'required',
            'id_buku' => 'required'
        ]);

        Peminjaman::where('id_peminjaman', $peminjaman->id_peminjaman)
            ->update([
                'tanggal_peminjaman' => $request->tanggal_peminjaman,
                'tanggal_batas_pengembalian' => $request->tanggal_batas_pengembalian,
                'npm' => $request->npm,
                'id_buku' => $request->id_buku
            ]);

        return redirect('Peminjaman');
    }

    public function hapusPeminjaman($idPeminjaman)
    {
        $peminjaman = Peminjaman::where('id_peminjaman', $idPeminjaman)->firstOrFail();
        Peminjaman::where('id_peminjaman', $peminjaman->id_peminjaman)->delete();
        return redirect('Peminjaman');
    }
}
