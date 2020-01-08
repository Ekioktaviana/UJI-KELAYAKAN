<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventari extends Model
{
    protected $primaryKey = 'id_inventaris';
    protected $fillable = [
        'id_inventaris', 'nama', 'kondisi', 'keterangan', 'jumlah', 'id_jenis', 'tanggal_register', 'id_ruang', 'kode_inventaris', 'id_petugas',
    ];
}
