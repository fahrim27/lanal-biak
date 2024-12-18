<?php

namespace App\Models\Footer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatKontak extends Model
{
    use HasFactory;

    protected $table = 'alamat_kontaks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'alamat',
        'phone',
        'email',
        'userid',
    ];
}
