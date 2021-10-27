<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    //protected $guarded = [];

    protected $fillable = [
        'name', 'bank', 'cpte_number', 'amount','init_value',
        'resid_value', 'estim_value', 'deqc', 'adress'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
