<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\reservation;

class nutritionniste extends Model
{
    use HasFactory;

    public function reservations(){
        return $this->hasMany(reservation::class);
        }
}
