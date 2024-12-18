<?php

namespace App\Models\Beranda;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasPokok extends Model
{
    use HasFactory;

    protected $table = 'tugas_pokoks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'image',
        'userid',
    ];
}
