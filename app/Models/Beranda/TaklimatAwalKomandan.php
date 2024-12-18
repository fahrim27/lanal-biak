<?php

namespace App\Models\Beranda;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaklimatAwalKomandan extends Model
{
    use HasFactory;

    protected $table = 'taklimat_awal_komandans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'text',
        'userid',
    ];
}
