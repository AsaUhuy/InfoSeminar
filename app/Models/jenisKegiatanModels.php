<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class jenisKegiatanModels extends Model
{
    use HasFactory;
    
    
    protected $table = 'jeniskegiatan';
    protected $primaryKey = "id_jeniskegiatan";
    protected $guarded = ['id_jeniskegiatan'];
    protected $fillable = [
        'id_jeniskegiatan',
        'nama',
        'keterangan',
    ];
    
    public function kegiatan(){
        return $this->belongsTo(kegiatanModels::class, 'id_jeniskegiatan', 'id_kegiatan');
    }

    
}