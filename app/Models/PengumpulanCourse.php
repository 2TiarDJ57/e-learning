<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PengumpulanCourse extends Model
{
    use HasFactory;
    public $table = 'pengumpulan_course';
    protected $guarded = ['id'];

    public function mahasiswa():BelongsTo
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function course():BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
