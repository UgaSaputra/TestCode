<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekapdata extends Model
{
    use HasFactory;
    protected $fillable = [
        'siswa_id',
        'guru_id',
        'kelas_id',
        'tanggal',
        'jumlah_siswa',
    ];

    public function siswa()
{
    return $this->belongsTo(Siswa::class);
}

public function kelas()
{
    return $this->belongsTo(Kelas::class);
}

public function guru()
{
    return $this->belongsTo(Guru::class);
}

}
