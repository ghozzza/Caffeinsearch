<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'waktu_mulai',
        'waktu_selesai',
        'keterangan',
        'foto'
    ];
}
