<?php

namespace Database\Seeders;


use App\Models\Golongan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Golongan::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'I/a','I/b','I/c','I/d','II/a','II/b','II/c','II/d','III/a','III/b','III/c','III/d',
            'IV/a','IV/b','IV/c','IV/d','IV/e'
        ];

        foreach ($data as $value) {
            Golongan::insert([
                'nama_golongan' => $value
            ]);
        }
    }
}
