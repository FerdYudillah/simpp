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
                <font size="4"><b>DAFTAR PEGAWAI NEGERI SIPIL</b></font><br>
            </center>
        </table>
        <br>
        <table class="static " align="center" rules="all" border="1px" style="width: 95%;">
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
                {{-- <th>Tgl.Naik Berkala</th>
                <th>Tgl.Naik Berkala</th> --}}
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
                </tr>
            @endforeach
        </table>
    </div>
</center>
</body>
</html>


