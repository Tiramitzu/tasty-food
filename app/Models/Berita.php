<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'beritas';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */


    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $fillable = [
        'judul',
        'slug',
        'gambar',
        'isi',
        'created_at',
        'updated_at',
    ];
}
