<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Jabatan::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Kepala Satuan','Sekretaris','Kasubag Keuangan','Kasubag Umum','Anggota Satpol PP','Kabid Damkar'
        ];

        foreach ($data as $value) {
            Jabatan::insert([
                'nama_jabatan' => $value
            ]);
        }
    }
}
