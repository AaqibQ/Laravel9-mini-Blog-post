<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    // function reflect user name to the table of show post 
    public function user(){
        return $this->belongsTo(User::class);
    }
}
