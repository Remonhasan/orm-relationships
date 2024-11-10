<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Define the many-to-many relationship
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
