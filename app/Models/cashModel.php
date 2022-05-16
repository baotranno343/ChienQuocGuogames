<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cashModel extends Model
{
    use HasFactory;
    protected $table = 'napthe';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;
}
