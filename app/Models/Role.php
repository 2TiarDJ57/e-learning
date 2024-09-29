<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;
    public $table = 'role';
    protected $guarded = ['id'];

    public function dosens():HasMany
    {
        return $this->hasMany(Dosen::class);
    }

    public function mahasiswas():HasMany
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
