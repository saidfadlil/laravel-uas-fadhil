<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = "tb_photos";

    protected $primaryKey = 'photo_id';
    
    protected $guarded = [];

}
