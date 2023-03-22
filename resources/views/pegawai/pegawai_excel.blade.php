<?php
    header("content-type: application/vnd-ms-excel");
    header("content-Disposition: attachment; filename=export_pegawai_non_pns.xls");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laporan Data Pegawai Negeri Sipil</title>
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
            <h2 style="text-align: center">Laporan Data Pegawai Negeri Sipil Satpol PP & Damkar Tapin</h2>
            <hr>
            <table>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>J.Kelamin</th>
                    <th>Pangkat</th>
                    <th>Gol.Ruang</th>
                    <th>Jabatan</th>
                    <th>Masa Kerja</th>
                    <th>Gaji Pokok</th>
                    <th>Tanggal TMT</th>
                    <th>Pelatihan</th>
                </tr>
                @php
                $no=1;
            @endphp
            @foreach ($pegawai as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->j_kelamin }}</td>
                    <td>{{ $item->pangkat->nama_pangkat }}</td>
                    <td>{{ $item->golongan->nama_golongan }}</td>
                    <td>{{ $item->jabatan->nama_jabatan }}</td>
                    <td>{{ $item->masa_kerja }}</td>
                    <td>{{ formatRupiah($item->gaji) }}</td>
                    <td>{{ $item->tmt }}</td>
                    <td>{{ $item->pelatihan }}</td>
                </tr>
            @endforeach
        </table>
      </body>
 </html>
