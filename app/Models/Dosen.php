<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dosen extends Model
{
    use HasFactory;
    public $table = 'dosen';
    protected $guarded = ['id'];

    public function role():BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function courses():HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function mataKuliahs():HasMany
    {
        return $this->hasMany(MataKuliah::class);
    }
}
