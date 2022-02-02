<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public function membership() {
        return $this->belongsTo(Membership::class);
    }
    public function team() {
        return $this->belongsTo(Team::class);
    }
}
