<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'kontaks';

    // Menentukan field mana yang dapat diisi secara massal
    protected $fillable = [
        'nama',
        'telepon',
        'email',
    ];
}
