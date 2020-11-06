<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karya extends Model
{
    // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
    protected $table = "karya";
    protected $primaryKey = "id_karya";
    protected $fillable = ['id_user','nama_karya' ,'tahun_karya', 'media', 'dimensi', 'deskripsi', 'gambar'];

}
