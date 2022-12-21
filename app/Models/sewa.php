<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sewa extends Model
{
    protected $table = "sewas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'judul', 'jenistmpt', 'alamat', 'jmlhfasilitas', 'plhnfasilitas',
        'fasilitaslain', 'foto', 'deskripsi', 'keterangan', 'harga'
    ];
}
