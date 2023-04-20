<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    protected $table = 'vegetables';
    protected $primaryKey = 'id';
    protected $fillable = [ 'pname', 'price','qty','photo'];
}
