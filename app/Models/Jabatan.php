<?php

namespace App\Models;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = "jabatan";
    protected $guarded = ['id'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
