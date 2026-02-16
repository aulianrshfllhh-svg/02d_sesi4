<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // Nama tabel sesuai migration [cite: 25]
    protected $table = 'mahasiswas'; 

    // WAJIB: Set nim sebagai primary key karena defaultnya adalah 'id'
    protected $primaryKey = 'nim'; 

    // WAJIB: Beritahu Laravel bahwa primary key bukan angka auto-increment 
    public $incrementing = false; 

    // WAJIB: Tipe data primary key adalah string 
    protected $keyType = 'string'; 

    // Kolom yang boleh diisi [cite: 61, 65]
    protected $fillable = ['nim', 'nama', 'kelas', 'matakuliah'];
}