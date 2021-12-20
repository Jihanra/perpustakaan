<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['judul_buku', 'penerbit', 'tahun_terbit', 'jumlah'];
    public function anggotas()
    {
    return $this->belongsToMany(Anggota::class);
    }

    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
}
