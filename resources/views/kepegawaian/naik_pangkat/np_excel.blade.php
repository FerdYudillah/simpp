<?php
    header("content-type: application/vnd-ms-excel");
    header("content-Disposition: attachment; filename=export_naik_pangkat_pns.xls");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laporan Kenaikan Pangkat PNS</title>
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
            <h2 style="text-align: center">Laporan Data Kenaikan Pangkat PNS Satpol PP & Damkar Tapin</h2>
            <hr>
            <table>
                <tr>
                    <th>No</th>
                    <th >NIP</th>
                    <th >Nama</th>
                    <th >Pangkat Lama</th>
                    <th >Golongan</th>
                    <th >Jabatan</th>
                    <th >Pangkat Baru</th>
                    <th >Tanggal Mulai</th>
                </tr>
                @php
                $no=1;
            @endphp
            @foreach ($naikPangkat  as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->pegawai->nip }}</td>
                    <td>{{ $item->pegawai->nama }}</td>
                    <td>{{ $item->pangkat->nama_pangkat }}</td>
                    <td>{{ $item->golongan->nama_golongan }}</td>
                    <td>{{ $item->jabatan->nama_jabatan }}</td>
                    <td>{{ $item->pangkat_baru }}</td>
                    <td>{{ $item->mulai_tanggal }}</td>>
                </tr>
            @endforeach
        </table>
      </body>
 </html>
