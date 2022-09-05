<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function photos(){
        return $this->hasMany(Photo::class);
    }
}
