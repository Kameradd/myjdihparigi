<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_desa',

    ];

    protected static ?string $modelLabel = 'Desa';
    protected static ?string $pluralModelLabel = 'Desa';
}
