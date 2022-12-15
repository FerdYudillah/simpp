<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Pegawai extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'pegawai';
    protected $guarded = ['id'];
    protected $with = ['pangkat','golongan','jabatan','anak','suami_istri','naik_berkala','naik_pangkat'];

    public function pangkat()
    {
        return $this->hasOne(Pangkat::class, 'id_pangkat', 'pangkat_id');
    }

    public function golongan()
    {
        return $this->hasOne(Golongan::class, 'id_golongan','golongan_id');
    }


    public function jabatan()
    {
        return $this->hasOne(Jabatan::class, 'id_jabatan', 'jabatan_id');
    }

    public function anak()
    {
        return $this->hasMany(Anak::class, 'id', 'pegawai_id');
    }

    public function suami_istri()
    {
        return $this->hasMany(SuamiIstri::class, 'id', 'pegawai_id');
    }

    public function naik_berkala()
    {
        return $this->hasOne(NaikBerkala::class, 'pegawai_id','pegawai_id');
    }

    public function naik_pangkat()
    {
        return $this->hasOne(NaikPangkat::class, 'id','pegawai_id');
    }
    
    public $sortable = [
        'nip', 'nama', 'j_kelamin', 'pangkat_id', 'golongan_id', 'jabatan_id', 'masa_kerja', 'gaji', 'naik_berkala', 'naik_pangkat','tmt','pelatihan'
    ];

    
}
