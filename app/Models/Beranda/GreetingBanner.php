<?php

namespace App\Models\Beranda;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GreetingBanner extends Model
{
    use HasFactory;

    protected $table = 'greeting_banners';

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
