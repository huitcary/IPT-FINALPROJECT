<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lipstick extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, $terms)
    {
        collect(explode(" ", $terms))
        ->filter()
        ->each(function($term) use($query){
            $term = '%'. $term . '%';

            $query->where('brand_name', 'like', $term)
                ->orWhere('type', 'like', $term);
        });

         
    }
}
