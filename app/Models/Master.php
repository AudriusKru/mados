<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;
    
    public function outfitMasters()
    {
        return $this->hasMany('App\Models\Outfit', 'master_id', 'id');
    }
}
    
