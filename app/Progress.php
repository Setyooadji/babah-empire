<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $primaryKey = 'progress_id';
    protected $fillable = ['tipe_id','file'];
}
