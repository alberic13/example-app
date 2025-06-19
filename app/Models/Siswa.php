<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = [
        'nama',
        'alamat',
        'jenis_kelamin',
        'timestamp_created_at',
        'timestamp_updated_at'
    ];
    
    // Disable Laravel's timestamp management as we're handling it manually
    public $timestamps = false;
}
