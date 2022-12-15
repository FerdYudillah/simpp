<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class NaikBerkala extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'naik_berkala';
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
        'pegawai_id', 'nip', 'nama', 't_lahir', 'tgl_lahir', 'pangkat_id', 'jabatan_id', 'gaji_lama', 'gaji_baru', 'masa_kerja','golongan_id','mulai_tgl'
    ];
}
