<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatanModels extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $guarded = ['id_kegiatan'];

    protected $fillable = [
        'namaKegiatan',
        'id_jeniskegiatan',
        'temaKegiatan',
        'tanggalPelaksanaan',
        'narasumber1',
        'instansiNarasumber1',
        'narasumber2',
        'instansiNarasumber2',
        'moderator',
        'bgsertifikat',
        'namaTTDser1',
        'instansiTTDser1',
        'namaTTDser2',
        'instansiTTDser2',
        'tanggalSertifikat'
    ];

    public function jeniskegiatan()
    {
        return $this->hasMany(JenisKegiatanModels::class, 'id_kegiatan', 'id_jeniskegiatan');
    }
}
