<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Anak extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'anak';
    protected $guarded = ['id_anak']; 
    protected $with = ['pegawai'];


    public function pegawai()
{
        return $this->belongsTo(Pegawai::class);
    }
    

    public $sortable = [
        'pegawai_id', 'nama', 'umur', 'status', 'tunjangan', 'jenis_kelamin'
    ];

}
