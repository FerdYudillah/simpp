<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pegawai = [
            [   
                'nip' => ' 1922556245566100223',
                'nama' => 'Noor Aina ',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1998-05-12',
                'alamat' => 'Komplek Haur Kuning',
                'j_kelamin' => 'Perempuan',
                'nohp' => '085552355230',
                'agama' => 'Islam',
                'sts_kawin' => 'Menikah',
                'pendidikan' => 'S1',
                'jumlah_anak' => '2',
                'pangkat_id' => '2',
                'jabatan_id' => '4',
                'masa_kerja' => '10 Tahun',
                'golongan_id' => '2',
                'gaji' => '1000000',
                'naik_berkala' => '2023-01-25',
                'naik_pangkat' => '2023-01-26',
                'sts_pegawai' => 'Aktif',

                
            ],
            [
                'nip' => ' 195833131162333117',
                'nama' => 'Ahmad Riza',
                't_lahir' => 'Binuang',
                'tgl_lahir' => '1999-05-15',
                'alamat' => 'Mandarahan',
                'j_kelamin' => 'Laki-laki',
                'nohp' => '0812332342280',
                'agama' => 'Islam',
                'sts_kawin' => 'Belum Menikah',
                'pendidikan' => 'S1',
                'pangkat_id' => '3',
                'jabatan_id' => '5',
                'masa_kerja' => '10 Tahun',
                'golongan_id' => '3',
                'gaji' => '1000000',
                'naik_berkala' => '2023-01-30',
                'naik_pangkat' => '2023-02-26',
                'sts_pegawai' => 'Aktif',
            ],
            [
                'nip' => ' 1998023315422222117',
                'nama' => 'Ahmad Raze',
                't_lahir' => 'Binuang',
                'tgl_lahir' => '1999-05-15',
                'alamat' => 'Mandarahan',
                'j_kelamin' => 'Laki-laki',
                'nohp' => '08335123110950',
                'agama' => 'Islam',
                'sts_kawin' => 'Belum Menikah',
                'pendidikan' => 'S1',
                'pangkat_id' => '3',
                'jabatan_id' => '5',
                'masa_kerja' => '10 Tahun',
                'golongan_id' => '3',
                'gaji' => '1000000',
                'naik_berkala' => '2023-01-30',
                'naik_pangkat' => '2023-02-26',
                'sts_pegawai' => 'Aktif',
            ],
            [   
                'nip' => ' 1933066823991181551123',
                'nama' => 'Muhammad Aldi Rahman',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1998-05-12',
                'alamat' => 'Komplek Asabri',
                'j_kelamin' => 'Laki-laki',
                'nohp' => '0222541231163090',
                'agama' => 'Islam',
                'sts_kawin' => 'Menikah',
                'pendidikan' => 'S1',
                'jumlah_anak' => '2',
                'pangkat_id' => '2',
                'jabatan_id' => '4',
                'masa_kerja' => '10 Tahun',
                'golongan_id' => '2',
                'gaji' => '1000000',
                'naik_berkala' => '2023-01-25',
                'naik_pangkat' => '2023-01-26',
                'sts_pegawai' => 'Aktif',

                
            ],
            [   
                'nip' => ' 12222331231005541123',
                'nama' => 'Muhammad Ansyari Shaleh',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1998-05-12',
                'alamat' => 'Komplek Asabri',
                'j_kelamin' => 'Laki-laki',
                'nohp' => '08221231152200',
                'agama' => 'Islam',
                'sts_kawin' => 'Menikah',
                'pendidikan' => 'S1',
                'jumlah_anak' => '2',
                'pangkat_id' => '2',
                'jabatan_id' => '4',
                'masa_kerja' => '10 Tahun',
                'golongan_id' => '2',
                'gaji' => '1000000',
                'naik_berkala' => '2023-01-25',
                'naik_pangkat' => '2023-01-26',
                'sts_pegawai' => 'Aktif',

                
            ],
            [   
                'nip' => ' 19223331231424441123',
                'nama' => 'Muhammad Fauzi Akbar',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1998-05-12',
                'alamat' => 'Komplek Asabri',
                'j_kelamin' => 'Laki-laki',
                'nohp' => '08222311223000',
                'agama' => 'Islam',
                'sts_kawin' => 'Menikah',
                'pendidikan' => 'S1',
                'jumlah_anak' => '2',
                'pangkat_id' => '2',
                'jabatan_id' => '4',
                'masa_kerja' => '10 Tahun',
                'golongan_id' => '2',
                'gaji' => '1000000',
                'naik_berkala' => '2023-01-25',
                'naik_pangkat' => '2023-01-26',
                'sts_pegawai' => 'Aktif',

                
            ],
            [   
                'nip' => ' 19222323310442661123',
                'nama' => 'Muhammad Riski Febrian',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1998-05-12',
                'alamat' => 'Komplek Asabri',
                'j_kelamin' => 'Laki-laki',
                'nohp' => '082212355522500',
                'agama' => 'Islam',
                'sts_kawin' => 'Menikah',
                'pendidikan' => 'S1',
                'jumlah_anak' => '2',
                'pangkat_id' => '2',
                'jabatan_id' => '4',
                'masa_kerja' => '10 Tahun',
                'golongan_id' => '2',
                'gaji' => '1000000',
                'naik_berkala' => '2023-01-25',
                'naik_pangkat' => '2023-01-26',
                'sts_pegawai' => 'Aktif',

                
            ],
            [   
                'nip' => ' 192223523539551141123',
                'nama' => 'Muhammad Sakti Praseyio',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1998-05-12',
                'alamat' => 'Komplek Asabri',
                'j_kelamin' => 'Laki-laki',
                'nohp' => '081111552200',
                'agama' => 'Islam',
                'sts_kawin' => 'Menikah',
                'pendidikan' => 'S1',
                'jumlah_anak' => '2',
                'pangkat_id' => '2',
                'jabatan_id' => '4',
                'masa_kerja' => '10 Tahun',
                'golongan_id' => '2',
                'gaji' => '1000000',
                'naik_berkala' => '2023-01-25',
                'naik_pangkat' => '2023-01-26',
                'sts_pegawai' => 'Aktif',

                
            ],
            [   
                'nip' => ' 195254332386621141123',
                'nama' => 'Muhammad Putra Perdana',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1998-05-12',
                'alamat' => 'Komplek Asabri',
                'j_kelamin' => 'Laki-laki',
                'nohp' => '081211323554400',
                'agama' => 'Islam',
                'sts_kawin' => 'Menikah',
                'pendidikan' => 'S1',
                'jumlah_anak' => '2',
                'pangkat_id' => '2',
                'jabatan_id' => '4',
                'masa_kerja' => '10 Tahun',
                'golongan_id' => '2',
                'gaji' => '1000000',
                'naik_berkala' => '2023-01-25',
                'naik_pangkat' => '2023-01-26',
                'sts_pegawai' => 'Aktif',

                
            ],
            [   
                'nip' => ' 195222232842123351123',
                'nama' => 'Muhammad Ridho',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1998-05-12',
                'alamat' => 'Komplek Asabri',
                'j_kelamin' => 'Laki-laki',
                'nohp' => '081111232122340',
                'agama' => 'Islam',
                'sts_kawin' => 'Menikah',
                'pendidikan' => 'S1',
                'jumlah_anak' => '2',
                'pangkat_id' => '2',
                'jabatan_id' => '4',
                'masa_kerja' => '10 Tahun',
                'golongan_id' => '2',
                'gaji' => '1000000',
                'naik_berkala' => '2023-01-25',
                'naik_pangkat' => '2023-01-26',
                'sts_pegawai' => 'Aktif',

                
            ],
            [   
                'nip' => ' 195222223223123351123',
                'nama' => 'Muhammad Ridho',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1998-05-12',
                'alamat' => 'Komplek Asabri',
                'j_kelamin' => 'Laki-laki',
                'nohp' => '081112364422340',
                'agama' => 'Islam',
                'sts_kawin' => 'Menikah',
                'pendidikan' => 'S1',
                'jumlah_anak' => '2',
                'pangkat_id' => '2',
                'jabatan_id' => '4',
                'masa_kerja' => '10 Tahun',
                'golongan_id' => '2',
                'gaji' => '1000000',
                'naik_berkala' => '2023-01-25',
                'naik_pangkat' => '2023-01-26',
                'sts_pegawai' => 'Aktif',

                
            ],
            
            

            

          ];     
        
          foreach($pegawai as $key => $value){
            Pegawai::create($value);
          }
    }
    
}
