<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MataKuliah extends Model
{
    use HasFactory;
    public $table = 'mata_kuliah';
    protected $guarded = ['id'];

    public function courses():HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function dosen():BelongsTo
    {
        return $this->belongsTo(Dosen::class);
    }

    public function prodi():BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }
}
