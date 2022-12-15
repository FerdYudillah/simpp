<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Anak;
use App\Models\Jabatan;
use App\Models\Pangkat;
use App\Models\Golongan;
use App\Models\SuamiIstri;
use App\Models\NaikBerkala;
use Laravel\Sanctum\HasApiTokens;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\NaikPangkat;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    //     'username',
    //     'level'
        
        
    // ];
    use Sortable;
    protected $table = "users";
    protected $guarded = ['id'];


    public $sortable = [
        'name', 'email', 'username', 'level'
    ];

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
        return $this->hasMany(Anak::class, 'id', 'id');
    }

    public function suami_istri()
    {
        return $this->hasOne(SuamiIstri::class, 'id','id');
    }

    public function naik_berkala()
    {
        return $this->hasOne(NaikBerkala::class, 'id','pegawai_id');
    }

    public function naik_pangkat()
    {
        return $this->hasOne(NaikPangkat::class, 'id','pegawai_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
