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
        'works_id',

    ];
    public function works()
   {
       return $this->belongsTo(Works::class);
   }
}
