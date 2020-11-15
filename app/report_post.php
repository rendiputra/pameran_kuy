<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report_post extends Model
{
    // field status: (0=antrian; 1=di Approve; 2=Ditolak; 3=Dihapus;)
    protected $table = "report_post";
    protected $primaryKey = "id_report";
    protected $fillable = ['id_karya','id_user' ,'pesan'];

}
