<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

use App\Http\Requests;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::paginate(10);
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswa]);
    }

    public function cariMahasiswa(Request $request)
    {
        $key = $request->key;
        $value = $request->value;

        $mahasiswa = Mahasiswa::where($key, 'like', '%' . $value . '%')->paginate(10);
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswa]);
    }

    public function tambahMahasiswa()
    {
        return view('mahasiswa.create');
    }

    public function simpanMahasiswa(Request $request)
    {

        $this->validate($request, [
            'npm' => 'required|max:8',
            'nama' => 'required|max:50',
            'kelas' => 'required|max:6',
            'jenis_kelamin' => 'required',
            'alamat' => 'required'
        ]);

        $mahasiswa = new Mahasiswa;

        $mahasiswa->npm = $request->npm;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->kelas = $request->kelas;
        $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa->alamat = $request->alamat;

        $mahasiswa->save();

        \Session::flash('flash_message', 'data Mahasiswa berhasil disimpan');

        return redirect('Mahasiswa');
    }

    public function editMahasiswa($npm)
    {
        $mahasiswa = Mahasiswa::where('npm', $npm)->firstOrFail();
        return view('mahasiswa.edit')
            ->with('mahasiswa', $mahasiswa);
    }

    public function updateMahasiswa(Request $request, $npm)
    {

        $mahasiswa = Mahasiswa::where('npm', $npm)->firstOrFail();

        $this->validate($request, [
            'npm' => 'required|max:8',
            'nama' => 'required|max:50',
            'kelas' => 'required|max:6',
            'jenis_kelamin' => 'required',
            'alamat' => 'required'
        ]);

        Mahasiswa::where('npm', $mahasiswa->npm)
            ->update([
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat
            ]);

        \Session::flash('flash_message', 'data Mahasiswa berhasil diubah');

        return redirect('Mahasiswa');
    }


    public function hapusMahasiswa($npm)
    {
        $mahasiswa = Mahasiswa::where('npm', $npm)->firstOrFail();
        Mahasiswa::where('npm', $mahasiswa->npm)->delete();

        \Session::flash('flash_message', 'data mahasiswa berhasil dihapus');

        return redirect('Mahasiswa');
    }
}
