<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'tb_mahasiswa';

    public function peminjamans()
    {
        return $this->hasMany('App\Peminjaman');
    }
}
