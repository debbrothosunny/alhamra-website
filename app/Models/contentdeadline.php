<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contentdeadline extends Model
{
    use HasFactory;
    public function CatName() 
    {
        return $this->belongsTo(maindeadline::class, 'category_id', 'id');
    }
} 
