<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table = 'pembayaran';
    public $timestamps = 'false';

    protected $fillable = ['tanggal_bayar','bulan_spp','tahun_spp'];
}
