<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Updata extends Model
{
    use HasFactory;
     protected $table ='up'; 
    protected $fillable = [
        'title', 'file_name'
    ];
}
