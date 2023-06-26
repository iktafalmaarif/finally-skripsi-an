<!DOCTYPE html>
<html>

<head>
	<title>Kop Surat</title>
	<style>
		
		

		.header {
			display: flex;
			align-items: center;
			margin-bottom: 40px;
		}

		.logo {
			width: 13%;
			height: auto;
		}

		.title {
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			flex-grow: 1;
			margin: 0;
			padding: 0;
		}

		.subtitle {
			font-size: 20px;
			font-weight: bold;
			text-align: center;
			margin: 0;
			padding: 0;
		}

		.title p {
			font-size: 12px;
			font-weight: normal;
			padding-top: 1%;
		}

		.line-one {
			border: none;
			border-bottom: 2px solid black;
			margin: 0;
			padding: 0;
		}

		.line-two {
			border: none;
			border-bottom: 5px solid black;
			margin: 0;
			padding-top: 1px;
		}

		.perihal-lampiran {
			padding-top: 2%;
			float: left;
			font-size: 14px;
		}

		.tanggal-lampiran {
			float: right;
			padding-top: 2%;
			font-size: 14px;
		}
	</style>
</head>

<body>


	<div class="container">
		<div class="header">
			<!-- <img src="https://1.bp.blogspot.com/-LVf1Oi6JikY/WIFap3DB89I/AAAAAAAACAk/5p3M8azJkdMsBuq7JM852u_EpOLs564MACLcB/s1600/LOGO%2BKAB%2BTEGAL1.png"
				alt="Logo" class="logo"> -->
			<div class="title">
				PEMERINTAH KABUPATEN TEGAL
				<div class="subtitle">KECAMATAN ADIWERNA</div>
				<div class="subtitle">DESA PAGIANTEN</div>
				<p class="subtitle">Email: info@contohperusahaan.com - Website: www.contohperusahaan.com</p>
			</div>
			<!-- <img src="https://1.bp.blogspot.com/-LVf1Oi6JikY/WIFap3DB89I/AAAAAAAACAk/5p3M8azJkdMsBuq7JM852u_EpOLs564MACLcB/s1600/LOGO%2BKAB%2BTEGAL1.png"
				alt="Logo" class="logo"> -->
		</div>

		<hr class="line-one">
		<hr class="line-two">

		
		<div class="title" style="text-align: center; font-family: 'Times New Roman'; padding-bottom: 1%;">
			<h1 style="font-size: 20px;text-decoration: underline;">SURAT KETERANGAN TIDAK MAMPU</h1>
			<p style="font-size: 18px;">Nomor : 471 / 04 / SKTM / 069 / VI / 2023</p>
		</div>

		<div class="isi" style="font-size: 15px; font-family: 'Times New Roman'; padding-left: 3%; padding-right: 3%;">
			<p style="text-indent: 80px">
				Yang bertanda tangan di bawah ini, Kepala Desa Pagiyanten Kecamatan Adiwerna Kabupaten Tegal, dengan ini menerangkan bahwa : 
			</p>

			<table style="padding-left: 8%;">
				<tr>
					<td>Nama</td>
					<td style="padding-left: 100px;">:</td>
					<td>{{$data->nama_lengkap}}</td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td style="padding-left: 100px;">:</td>
					<td>{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td style="padding-left: 100px;">:</td>
					<td>{{$data->jenis_kelamin}}</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td style="padding-left: 100px;">:</td>
					<td>{{$data->alamat}}</td>
				</tr>
				<tr>
					<td>Agama</td>
					<td style="padding-left: 100px;">:</td>
					<td>{{$data->agama}}</td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td style="padding-left: 100px;">:</td>
					<td>{{$data->pekerjaan}}</td>
				</tr>
				<tr>
					<td>Kewarganegaraan</td>
					<td style="padding-left: 100px;">:</td>
					<td>{{$data->kewarganegaraan}}</td>
				</tr>
			</table>
			<p style="padding-left: 8%;">Adalah benar-benar <strong>Keluarga Tidak Mampu/ Miskin</strong> dan akan digunakan untuk :</p>

			<table style="padding-left: 8%;">
				<tr>
					<td>Keperluan</td>
					<td style="padding-left: 150px;">:</td>
					<td style="text-align: justify;">SALSYARAT KERINGANAN BIAYA UNTUK PENDAFTARAN SMP DI SLB MANUNGGAL SLAWI</td>
				</tr>
				<tr>
					<td>Keterangan Lain-lain</td>
					<td style="padding-left: 150px;">:</td>
					<td style="text-align: justify;">Bahwa anak tersebut diatas benar-benar dari
					Keluarga Tidak Mampu dan Orang Tuanya Termasuk Penerima
					Bantuan PKH & BPNT.
				  </td>
				</tr>				
			</table>
			<p style="text-indent: 80px">Demikian Surat Keterangan ini Kami buat dengan sebenarnya dan untuk dapat dipergunakan sebagamana mestinya.</p>


			<div class="sign" style="font-size: 15px; font-family: 'Times New Roman'; padding-top: 2%; padding-left: 75%;">
				<p>Hormat kami,</p>
				<br>
				<br>
				<p><strong>SEGER</strong></p>
			</div>


		</div>
	
</div>




</body>

</html>
