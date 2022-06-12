<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    #one to many (inverse)/belongs to
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

}
