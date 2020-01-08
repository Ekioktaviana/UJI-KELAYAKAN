<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    
    protected $primaryKey = 'id_ruang';
    protected $fillable = ['id_ruang' , 'nama_ruang', 'kode_ruang', 'keterangan'];
}
