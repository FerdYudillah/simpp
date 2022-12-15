<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Pesan extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'pesan';
    protected $guarded = ['id'];
    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
