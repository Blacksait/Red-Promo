<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    public $primaryKey = 'id';

    public function cities(){
        return $this->belongsToMany(City::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
