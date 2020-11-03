<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karya extends Model
{
    //
    protected $table = "karya";
    protected $primaryKey = "id_karya";
    protected $fillable = ['id_user','nama_karya' ,'tahun_karya', 'media', 'dimensi', 'deskripsi', 'gambar'];
}
