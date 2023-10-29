<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    use HasFactory;
    protected $fillable = [
                 'id',
                 'workstart',
                 'workend',
                 'worktime',
                 'users_id',

             ];
             public function users()
                {
                    return $this->belongsTo(Users::class);
                }
}

