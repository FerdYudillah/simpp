<?php

namespace Database\Seeders;

use App\Models\nonPegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NonPnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $NonPNS = [
            //1
            [
                'nama' => 'NOOR AMININ',
                'nitp' => '881124 200901 1 0002',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1988-11-24',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2009-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'SMA',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081209045682',
            ],
            //2
            [
                'nama' => 'KHAIRIL ANWAR',
                'nitp' => '880817 200901 1 0003',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1988-08-17',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2009-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081351045611',
            ],
            //3
            [
                'nama' => 'REDDY ALFIYADIE',
                'nitp' => '900303 200901 1 0005',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1990-03-03',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2009-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081431045682',
            ],
            //4
            [
                'nama' => 'EKO SETIAWAN',
                'nitp' => '861212 200901 1 0007',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1986-12-12',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2009-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081351049682',
            ],
            //5
            [
                'nama' => 'ACHMAD JULFANSYAH',
                'nitp' => '870306 200901 1 0008',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1987-03-06',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2009-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081123245682',
            ],
            //6
            [
                'nama' => 'ROULLY GAUTAMA',
                'nitp' => '881220 200901 1 0009',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1988-12-20',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2009-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081223245682',
            ],
            //7
            [
                'nama' => 'ABDUL ANGGA NOFARIS',
                'nitp' => '890106 200901 1 0010',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1989-01-06',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2009-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081266245682',
            ],
            //8
            [
                'nama' => 'SUFIAN HIDAYAT',
                'nitp' => '920205 201501 1 0012',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1992-02-05',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081266785682',
            ],
            //9
            [
                'nama' => 'MUHAMMAD BAQIR',
                'nitp' => '951225 201501 1 0013',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1995-12-25',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081266780082',
            ],
            //10
            [
                'nama' => 'FAJAR BAKHRUL U LUM',
                'nitp' => '940203 201501 1 0014',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1994-02-03',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081202780082',
            ],
            //11
            [
                'nama' => 'MUHAMMAD SHAUFI ZA',
                'nitp' => '940203 201501 1 0015',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1994-02-03',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081442780082',
            ],
            //12
            [
                'nama' => 'MUHAMMAD SYAFI I',
                'nitp' => '941029 201501 1 0016',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1994-10-29',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081449980082',
            ],
            //13
            [
                'nama' => 'MUHAMMAD IHSAN RIFANIE',
                'nitp' => '951127 201501 1 0017',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1995-11-27',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081444680082',
            ],
            //14
            [
                'nama' => 'NOOR IPANSYAH',
                'nitp' => '940327 201501 1 0018',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1994-03-27',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081444680482',
            ],
            //15
            [
                'nama' => 'M. APRIYANI SAPUTRA',
                'nitp' => '950413 201501 1 0019',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1995-04-13',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081444686782',
            ],
            //16
            [
                'nama' => 'M. ADI WIRA BHAKTI',
                'nitp' => '960113 201501 1 0020',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1996-01-13',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081444681982',
            ],
            //17
            [
                'nama' => 'MUHAMMAD JUNAIDI AMINNULLAH',
                'nitp' => '930419 201501 1 0021',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1993-04-19',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '081244681982',
            ],
            //18
            [
                'nama' => 'HERLAN FAUZI',
                'nitp' => '920904 201501 1 0022',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1998-09-04',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '085344681982',
            ],
            //19
            [
                'nama' => 'M. MAHMUDDIN, SH.',
                'nitp' => '960405 201501 1 0024',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1996-04-05',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '085344600982',
            ],
            //20
            [
                'nama' => 'M. ANSARUDDIN',
                'nitp' => '960518 201501 1 0026',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1996-05-18',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '085344600982',
            ],
            //21
            [
                'nama' => 'M. ZUHRI WAHYUDI',
                'nitp' => '930618 201501 1 0028',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1993-06-18',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '082344600982',
            ],
            //22
            [
                'nama' => 'ABDUL KHAIR',
                'nitp' => '961125 201501 1 0029',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1996-11-25',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '082144600982',
            ],
            //23
            [
                'nama' => 'HENI MARLINA, S. Pd.',
                'nitp' => '930517 201501 2 0031',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1993-05-17',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '085144600982',
            ],
            //24
            [
                'nama' => 'ANDINI AYU LESTARI YANTI, S.AP',
                'nitp' => '960508 201501 2 0033',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1996-05-08',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '082244600982',
            ],
            //25
            [
                'nama' => 'SHELLYVIA, S. Pd.',
                'nitp' => '941228 201501 2 0034',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1994-12-28',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '082244600979',
            ],
            //26
            [
                'nama' => 'RENI WULANDARI',
                'nitp' => '921229 201501 2 0035',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1992-12-29',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '082249900979',
            ],
            //27
            [
                'nama' => 'INSAN KAMELIYA',
                'nitp' => '950319 201501 2 0036',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1995-03-19',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '082244900979',
            ],
            //28
            [
                'nama' => 'YANA, S. Kom.',
                'nitp' => '950518 201501 2 0037',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1995-05-18',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '082244944979',
            ],
            //29
            [
                'nama' => 'NOOR HIDAYAH',
                'nitp' => '941016 201501 2 0039',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1995-05-18',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '085244944979',
            ],
            //30
            [
                'nama' => 'RINDA RIYANTI, SH.',
                'nitp' => '950618 201501 2 0040',
                't_lahir' => 'Rantau',
                'tgl_lahir' => '1995-06-18',
                'j_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'awal_kerja' => '2015-01-01',
                'pend_awal' => 'TK',
                'pend_akhir' => 'S1',
                'jabatan_id' => '26',
                'alamat' => 'Rantau',
                'nohp' => '085344944979',
            ],
        ];
        foreach($NonPNS as $key => $value){
            nonPegawai::create($value);
          }
    }
}
