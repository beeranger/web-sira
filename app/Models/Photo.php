<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with =['category','unit'];

    public function scopeFilter($query, array $filters){
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title','like','%'.$filters['search'].'%')->orWhere('body','like','%'.$filters['search'].'%');
        // }
        // $query->when($filters['search'] ?? false , function($query, $search){
        //     return $query->where('title','like','%'.$search.'%')->orWhere('body','like','%'.$search.'%');
        // });
        $query->when($filters['category'] ?? false , function($query, $category){
            return $query->whereHas('category', function($query) use($category){
                $query->where('slug',$category);
            }) ;
        });
        $query->when($filters['unit'] ?? false , function($query, $unit){
            return $query->whereHas('unit', function($query) use($unit){
                $query->where('slug',$unit);
            }) ;
        });
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}
