<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'name', // Add 'name' to the list of fillable attributes
        // other fillable attributes...
    ];
    public function level()
    {
        return $this->belongsTo(Level::class, 'levels_id');
    }
    use HasFactory;
}
