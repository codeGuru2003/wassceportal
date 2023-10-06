<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function classTypes()
    {
        return $this->hasMany(Classes::class);
    }
    use HasFactory;
}
