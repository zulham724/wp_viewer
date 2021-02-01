<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WpCategory extends Model
{
    use HasFactory;

    public function wp_sites(){
        return $this->hasMany('App\Models\WpSite');
    }
}
