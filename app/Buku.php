<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'tb_buku';

    protected $fillable = [
        'judul_buku', 'pengarang', 'tahun_terbit', 'penerbit', 'jumlah_buku', 'nomor_rak_buku'
    ];

    public function peminjamans()
    {
        return $this->hasMany('App\Peminjaman');
    }
}
