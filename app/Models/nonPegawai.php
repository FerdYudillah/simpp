<?php

namespace App\Models;

use App\Models\Jabatan;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class nonPegawai extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'non_pns';
    protected $guarded = ['id'];

    public function jabatan()
    {
        return $this->hasOne(Jabatan::class, 'id_jabatan', 'jabatan_id');
    }

    public $sortable = [
        'nama', 'nitp', 't_lahir','tgl_lahir','j_kelamin','awal_kerja','pend_awal','pend_akhir','jabatan_id'
    ];
}
