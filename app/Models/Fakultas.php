<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fakultas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function mahasiswas():HasMany
    {
        return $this->hasMany(Mahasiswa::class);
    }

    public function prodies():HasMany
    {
        return $this->hasMany(Prodi::class);
    }
}
