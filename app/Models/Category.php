<?php

namespace App\Models;

use App\Models\Asset;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

   // protected $guarded = [];

   protected $fillable = [
    'name', 'slug'
];

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
    
}
