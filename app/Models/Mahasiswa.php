<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
    use HasFactory;
    public $table = 'mahasiswa';
    protected $guarded = ['id'];

    public function pengumpulanCourses():HasMany
    {
        return $this->hasMany(PengumpulanCourse::class);
    }

    public function prodi():BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }

    public function role():BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function fakultas():BelongsTo
    {
        return $this->belongsTo(Fakultas::class);
    }
}
