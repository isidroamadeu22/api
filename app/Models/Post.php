<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'category_id', 'status'];

    public function category(){
        //One to One
        return $this->belongsTo('App\Models\Category');
    }
}
