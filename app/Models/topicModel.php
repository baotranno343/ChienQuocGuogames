<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topicModel extends Model
{
    use HasFactory;
    protected $table = 'topic';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
}
