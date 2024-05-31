<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
    public function moduls(){
        return $this->hasMany(Modul::class);
    }
    public function steps(){
        return $this->hasMany(Step::class);
    }
    public function contacts(){
        return $this->hasMany(Contact::class);
    }
}
