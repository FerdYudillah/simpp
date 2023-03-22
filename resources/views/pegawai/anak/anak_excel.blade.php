<?php
    header("content-type: application/vnd-ms-excel");
    header("content-Disposition: attachment; filename=export_anak_pns.xls");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laporan Data Anak PNS</title>
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
            <h2 style="text-align: center">Laporan Data Anak PNS Satpol PP & Damkar Tapin</h2>
            <hr>
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama PNS/Orang Tua Anak</th>
                    <th>Nama Anak</th>
                    <th>Umur</th>
                    <th>Status</th>
                    <th>Status Tunjangan</th>
                </tr>
                @php
                $no=1;
            @endphp
            @foreach ($anak as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->pegawai->nama }}-({{ $item->pegawai->nip }})</td>
                    <td>{{ $item->nama }}</td>
                     <td>{{ $item->umur }}</td>
                     <td>{{ $item->status }}</td>
                     <td>{{ $item->tunjangan }}</td>
                </tr>
            @endforeach
        </table>
      </body>
 </html>
