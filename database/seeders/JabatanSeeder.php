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
            'Kepala Satuan','Sekretaris','Kasubag Keuangan','Kasubbag Umum dan Kepegawaian','Kasubag Umum','Kabid Damkar','Penata Keuangan',
            'Kabid Tibum dan Tranmas', 'Kabid  Penegakan Peraturan dan Perundang-Undangan Daerah', 'Kabid Linmas dan Bangtas',
            'Kasi Linmas','Kasi Penanganan dan Pengendalian Kebakaran','Kasi Pengembangan Kapasitas','Kasi Penyelidikan dan Penyidikan','Kasi Operasional dan Pengendalian',
            'Plt. Kasi Sarana dan Prasarana Kebakaran','Plt. Kasi Sarana dan Prasarana Kebakaran','Plt. Kasi Pengamanan dan Pengawalan','Plt. Kasubbag Perencanaan dan Pelaporan',
            'JF Pol PP Ahli Pertama','JF Pol PP Terampil/Pelaksana Lanjutan','JF Pol PP Terampil/Pelaksana Lanjutan','JF Pol PP Ahli Pertama','Analis Sumber Daya Manusia Aparatur',
            'JF Pol PP Terampil/Pelaksana Lanjutan',

            'Anggota Polisi Pamong Praja',
        ];

        foreach ($data as $value) {
            Jabatan::insert([
                'nama_jabatan' => $value
            ]);
        }
    }
}
