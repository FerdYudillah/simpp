<?php
    header("content-type: application/vnd-ms-excel");
    header("content-Disposition: attachment; filename=export_pegawai_non_pns.xls");
?>
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
            <h2 style="text-align: center">Laporan Data Pegawai Non PNS</h2>
            <hr>
            <table>
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
