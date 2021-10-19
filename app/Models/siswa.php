<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswa';
    public $timestamps = 'false';

    protected $fillable = ['nisn','nis','nama','alamat','no_telpon'];
}
