<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;
    public $table = 'course';
    protected $guarded = ['id'];

    public function dosen():BelongsTo
    {
        return $this->belongsTo(Dosen::class);
    }

    public function mataKuliah():BelongsTo
    {
        return $this->belongsTo(MataKuliah::class);
    }

    public function pengumpulanCourses():HasMany
    {
        return $this->hasMany(PengumpulanCourse::class);
    }
}
