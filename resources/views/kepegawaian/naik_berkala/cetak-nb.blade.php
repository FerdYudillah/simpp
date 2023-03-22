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
                <font size="4"><b>DAFTAR PNS YANG MENERIMA KENAIKAN GAJI BERKALA</b></font><br>
            </center>
        </table>
        <br>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
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
    </div>
</center>
</body>
</html>


