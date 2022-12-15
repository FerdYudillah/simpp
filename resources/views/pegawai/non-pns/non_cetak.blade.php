<!DOCTYPE html>
<html>
    <head>
        <title>Cetak PNS</title>
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
                {{-- <td><img src="/image/lambang.jpg" width="90" height="90"></td> --}}
                {{-- <td><img src="{{ asset('/image/lambang.jpg') }}" width="90" height="90"></td> --}}
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
                <font size="4"><b>DAFTAR PEGAWAI NON PNS</b></font><br>
            </center>
        </table>
        <br>
        <table class="static " align="center" rules="all" border="1px" style="width: 95%;">
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
    </div>
</center>
</body>
</html>


