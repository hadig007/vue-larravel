<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Pesan extends Model
{
    use HasFactory;
    protected $fillable = ['from','to'];

    public function post(){
        return $this->belongsTo('App\Models\Post');
    }
}
