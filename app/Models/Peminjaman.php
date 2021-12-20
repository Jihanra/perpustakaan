<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //use HasFactory;  
    protected $fillable = ['id_anggota','id_buku','tgl_pinjam','tgl_kembali'];
    protected $table = "peminjaman";

    public function anggota(){
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }
    public function book(){
        return $this->belongsTo(Book::class, 'id_buku');
    }
    public function books(){
        return $this->belongsTo(Book::class, 'id_buku');
    }
    
}