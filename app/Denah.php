<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denah extends Model
{
    protected $primaryKey = 'denah_id';
    protected $table = 'denah';
    protected $fillable = ['tipe_id','file'];
}
