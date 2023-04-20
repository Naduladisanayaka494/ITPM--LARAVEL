<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Req extends Model
{
    protected $table = 'reqs';
    protected $primaryKey = 'id';
    protected $fillable = ['requirement'];
}
