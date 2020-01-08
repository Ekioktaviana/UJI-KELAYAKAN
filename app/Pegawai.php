<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $primaryKey = 'id_pegawai';
    protected $fillable = ['id_pegawai', 'nama_pegawai', 'nip', 'alamat'];
}
