<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regModel extends Model
{
    use HasFactory;
    protected $table = 'nguoidung';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
}
