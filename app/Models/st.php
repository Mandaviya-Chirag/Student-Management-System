<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class st extends Model
{
    protected $table = 'st';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];

    use HasFactory;
}
