<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class NaikPangkat extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'naik_pangkat';
    protected $guarded = ['id'];
    protected $with = ['pangkat','golongan','jabatan','pegawai'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function pangkat()
    {
        return $this->hasOne(Pangkat::class, 'id_pangkat', 'pangkat_id');
    } 

    public function golongan()
    {
        return $this->hasOne(Golongan::class, 'id_golongan', 'golongan_id');
    }
    
    public function jabatan()
    {
        return $this->hasOne(Jabatan::class, 'id_jabatan', 'jabatan_id'); 
    }

    public $sortable = [
        'pegawai_id',  'pangkat_id', 'golongan_id','jabatan_id','pangkat_baru','mulai_tanggal'
    ];
}
