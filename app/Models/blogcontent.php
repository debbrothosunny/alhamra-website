<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogcontent extends Model
{
    use HasFactory;
    public function CatName()
    {
        return $this->belongsTo(blogmain::class, 'category_id','id');
    }
  
    public function CreatedBy()
    {
        return $this->belongsTo(User::class, 'created_by','id');
    }
}
