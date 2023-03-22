<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Satpol PP & Damkar Tapin</title>
        <style type="text/css">
            table {
                border-style: double;
                border-width: 3px;
                border-color: white;
            }
            table tr .text2 {
                text-align: right;
                font-size: 13px;
            }
            table tr .text {
                text-align: center;
                font-size: 13px;
            }
            table tr td {
                font-size: 13px;
            }

        </style>
    </head>
<body>
    <center>
    <div class="form-group">
        <center>
            <table width="770">
                <tr>
                    {{-- <td><img src="{{ public_path('/image/lambang.jpg') }}" width="90" height="90"></td> --}}
                    <td width='40'><img src="{{ public_path('/image/logo-satpol-pp.png') }}" width="80" height="90"></td>
                    <td>
                    <center>
                        <font size="4">PEMERINTAH KABUPATEN TAPIN</font><br>
                        <font size="5"><b>DINAS SATUAN POLISI PAMONG PRAJA & DAMKAR TAPIN</b></font><br>
                        <font size="2"><i>Jalan Brigjen H. Hasan Basry No.22, Kode Pos 71111, RANTAU</i></font>
                    </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
            </table>
        </center>
        <table width="770">
            <center>
                <font size="4"><b>DAFTAR ANAK PNS SATPOL PP & DAMKAR TAPIN</b></font><br>
            </center>
        </table>
        <br>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
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
    </div>
</center>
</body>
</html>


