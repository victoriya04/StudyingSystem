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
        'teacher_id',
        'organization_id',
        'location_id',
    ];

    protected $appends = [
        'teacher_name',
        'organization_name',
        'location_name',
    ];

    public function getTeacherName()
    {
        return $this->teacher ? $this->teacher->name : null;
    }

    public function getLocationName()
    {
        return $this->location ? $this->location->name : null;
    }

    public function getOrganizationName()
    {
        return $this->organization ? $this->organization->name : null;
    }

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
