<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'nim', 'email', 'jurusan'
    ];
    protected $hidden = [

    ];
}
