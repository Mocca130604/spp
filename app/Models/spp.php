<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    protected $table = 'pembayaran';
    public $timestamps = 'false';

    protected $fillable = ['angkatan','tahun','nominal'];
}
