<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NguoiChoi extends Model
{
	use SoftDeletes;
 	protected $dates = ['deleted_at'];
    protected $table='nguoi_choi';
}
