<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breaks extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'breakstart',
        'breakend',
        'work_id',

    ];
    public function work()
   {
       return $this->belongsTo(Work::class);
   }
}
