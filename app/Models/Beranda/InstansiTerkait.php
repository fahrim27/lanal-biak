<?php

namespace App\Models\Beranda;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstansiTerkait extends Model
{
    use HasFactory;

    protected $table = 'instansi_terkaits';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'image',
        'userid',
    ];
}
