<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Връзка с курсовете
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
