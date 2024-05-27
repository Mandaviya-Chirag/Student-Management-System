<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollments';
    protected $primarykey = 'id';
    protected $fillable = ['enroll_no', 'batch_id', 'st_id', 'join_date', 'fee'];
    use HasFactory;

    public function st()
    {
        return $this->belongsTo(st::class);
    }
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
