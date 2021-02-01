<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WpSite extends Model
{
    use HasFactory;

    public function wp_category(){
        return $this->belongsTo('App\Models\WpCategory');
    }
}
