<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public function member() {
        return $this->hasMany(Member::class);
    }
    public function event() {
        return $this->hasMany(Events::class);
    }
}
