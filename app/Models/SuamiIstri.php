<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class SuamiIstri extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'suami_istri';
    protected $guarded = ['id'];
    protected $with = ['pegawai'];

    public function pegawai()
{
        return $this->belongsTo(Pegawai::class);
    }

    public $sortable = [
        'pegawai_id','nama_si','j_kelamin','status','pekerjaan','umur','nohp','sts_tunjangan','t_lahir','tgl_lahir'
    ];
}
