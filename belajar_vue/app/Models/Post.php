<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pesan;

class Post extends Model
{
    use HasFactory;
    public function pesanan(){
        return $this->hasMany('App\Models\Pesan');
    }
}
