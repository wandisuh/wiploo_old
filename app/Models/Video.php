<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $table = 'videos';

    protected $fillable = ['title','author','content','file_video','category_id'];
    
}
