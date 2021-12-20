<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $fillable = ['nisn', 'nama', 'kelas', 'jurusan', 'no_tlp'];
    protected $table = "anggotas";
    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
    
    public function books(){
        return $this->belongsToMany(Book::class, 'peminjaman', 'id_anggota', 'id_buku')->withPivot('tgl_pinjam','tgl_kembali');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
