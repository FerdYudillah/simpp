<?php
    header("content-type: application/vnd-ms-excel");
    header("content-Disposition: attachment; filename=export_suami_istri_pns.xls");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laporan Suami Istri PNS</title>
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
            <h2 style="text-align: center">Laporan Data Suami Istri PNS Satpol PP & Damkar Tapin</h2>
            <hr>
            <table>
                <tr>
                    <th>No</th>
                    <th >Nama PNS (Pasangan)</th>
                    <th>Nama Suami/Istri</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>J.Kelamin</th>
                    <th>Status</th>
                    <th>Pekerjaan</th>
                    <th>Umur</th>
                    <th>No HP</th>
                    <th>Status Tunjangan</th>
                </tr>
            @php
            $no=1;
        @endphp
        @foreach ($suami_istri as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td >{{ $item->pegawai->nama }} ({{ $item->pegawai->nip }})</td>
                <td>{{ $item->nama_si }}</td>
                <td>{{ $item->t_lahir }},{{ $item->tgl_lahir }}</td>
                <td>{{ $item->j_kelamin }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->pekerjaan }}</td>
                <td>{{ $item->umur }}</td>
                <td>{{ $item->nohp }}</td>
                <td>{{ $item->sts_tunjangan }}</td>
            </tr>
        @endforeach
        </table>
      </body>
 </html>
