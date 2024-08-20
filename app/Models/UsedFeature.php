<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsedFeature extends Model
{
    use HasFactory;
    protected $fillable = [
        'feature_id',
        'user_id',
        'credits'
    ];
    protected function casts(): array {}
}
