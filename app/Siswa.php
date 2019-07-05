<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // protected $table = 'siswas';
    protected $fillable = ['nama', 'nis', 'alamat', 'tgl_lahir', 'jenis_kelamin'];
    // protected $visible = ['nama', 'nis', 'alamat', 'tgl_lahir', 'jenis_kelamin'];
    public $timestamps = true;
}
