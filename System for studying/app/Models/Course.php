<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'duration',
        'teacher_name',
        'teacher_id',
        'organization_id',
        'organization_name',
        'location_id',
        'location_name'
    ];

    // Връзка с преподавателя
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    // Връзка с организацията
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    // Връзка с местоположението
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
