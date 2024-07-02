<?php

// Model: app/Models/Transaction.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_pemesanan',
        'tujuan',
        'penumpang',
        'tanggal_berangkat'
    ];
}
