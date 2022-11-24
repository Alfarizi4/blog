<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conntent extends Model
{
    use HasFactory;
    protected $table = 'konten';
    protected $fillable = [
        'judul',
        'konten'
    ];
}
