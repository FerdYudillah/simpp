<?php
    header("content-type: application/vnd-ms-excel");
    header("content-Disposition: attachment; filename=export_naik_berkala_pns.xls");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laporan Kenaikan Berkala PNS</title>
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
            <h2 style="text-align: center">Laporan Data Kenaikan Berkala PNS Satpol PP & Damkar Tapin</h2>
            <hr>
            <table>
                <tr>
                    <th>No</th>
                    <th >NIP</th>
                    <th >Nama</th>
                    <th >Tempat Tanggal Lahir</th>
                    <th >Pangkat</th>
                    <th >Jabatan</th>
                    <th >Gaji Lama</th>
                    <th >Gaji baru</th>
                    <th >Masa Kerja</th>
                    <th >Golongan</th>
                    <th >Tanggal Mulai</th>
                </tr>
                @php
                $no=1;
            @endphp
            @foreach ($naikBerkala as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->pegawai->nip }}</td>
                    <td>{{ $item->pegawai->nama }}</td>
                    <td>{{ $item->t_lahir }}, {{ $item->tgl_lahir }}</td>
                    <td>{{ $item->pangkat->nama_pangkat }}</td>
                    <td>{{ $item->jabatan->nama_jabatan }}</td>
                     <td>{{ formatRupiah($item->gaji_lama) }}</td>
                    <td>{{ formatRupiah($item->gaji_baru) }}</td>
                    <td>{{ $item->masa_kerja }}</td>
                    <td>{{ $item->golongan->nama_golongan }}</td>
                    <td >{{ $item->mulai_tgl }}</td>
                </tr>
            @endforeach
        </table>
      </body>
 </html>
