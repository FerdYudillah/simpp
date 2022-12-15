<?php

namespace App\Models;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;


class Golongan extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = "golongan";
    protected $guarded = ['id'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public $sortable = [
        'nama_golongan'
    ];
}
