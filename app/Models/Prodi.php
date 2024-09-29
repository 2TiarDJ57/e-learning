<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    use HasFactory;
    public $table = 'prodi';
    protected $guarded = ['id'];

    public function mataKuliahs():HasMany
    {
        return $this->hasMany(MataKuliah::class);
    }

    public function fakultas():BelongsTo
    {
        return  $this->belongsTo(Fakultas::class);
    }

    public function mahasiswas():HasMany
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
