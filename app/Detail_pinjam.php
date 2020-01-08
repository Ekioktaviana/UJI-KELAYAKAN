<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_pinjam extends Model
{
    protected $primaryKey = 'id_detail_pinjam';
    protected $fillable = [
        'id_detail_pinjam', 'id_inventaris', 'jumlah'
    ];
}
