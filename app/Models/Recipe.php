<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function getTypeAttribute()
    {
        if ($this->budget === 0) {
            return 'free';
        } else if ($this->budget < 1000) {
            return 'cheap';
        } else {
            return 'expensive';
        }
    }

}
