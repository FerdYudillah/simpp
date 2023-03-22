<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laporan Data Pegawai Non PNS</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }
         td,
         th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
            tr:nth-child(even) {
            background-color: #dddddd;
            }
            </style>
            </head>
            <body>
                <table style="border: none">
                    <tr>
                        <td width='40'><img src="{{ public_path('/image/logo-satpol-pp.png') }}" width="80" height="90"></td>
                        <td>

                                <font size="4">PEMERINTAH KABUPATEN TAPIN</font><br>
                                <font size="5"><b>DINAS SATUAN POLISI PAMONG PRAJA & DAMKAR TAPIN</b></font><br>
                                <font size="2"><i>Jalan Brigjen H. Hasan Basry No.22, Kode Pos 71111, RANTAU</i></font>

                        </td>
                    </tr>
                </table>
            <hr>
            <table >
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NITP</th>
                    <th>Tempat,Tanggal lahir</th>
                    <th>J.kelamin</th>
                    <th>Awal Bekerja</th>
                    <th>Pendidikan Awal</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Jabatan</th>
                </tr>
                @php
                $no=1;
                @endphp
                @foreach ($nonPegawai as $non)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $non->nama }}</td>
                        <td>{{ $non->nitp }}</td>
                        <td>{{ $non->t_lahir }},{{ $non->tgl_lahir }}</td>
                        <td>{{ $non->j_kelamin }}</td>
                        <td>{{ $non->awal_kerja }}</td>
                        <td>{{ $non->pend_awal }}</td>
                        <td>{{ $non->pend_akhir }}</td>
                        <td>{{ $non->jabatan->nama_jabatan }}</td>
                    </tr>
                @endforeach
        </table>
      </body>
 </html>
