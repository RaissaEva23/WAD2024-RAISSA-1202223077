<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table ='mahasiswas';
    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'dosen_id',
        'email',
        'jurusan',
    ];
    public function Dosen(){
        return $this -> belongsTo(Dosen::class);
    }
}
