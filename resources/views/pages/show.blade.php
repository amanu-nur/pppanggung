<!DOCTYPE html>
<html lang="en">

<?php
// Buat objek DateTime dari string tanggal
$date = new DateTime($data->dateofbirth);

// Format ulang tanggal menjadi "d F Y" (11 Mei 2024)
$tanggalBaru = $date->format('d F Y');

// Ganti nama bulan dari bahasa Inggris ke bahasa Indonesia
$bulanInggris = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$bulanIndonesia = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

$tanggalLahirBaru = str_replace($bulanInggris, $bulanIndonesia, $tanggalBaru);

$dateStart = new DateTime($data->earlyentry);
$tanggalearlyentry = $dateStart->format('d F Y');
$dateNewearlyentry = str_replace($bulanInggris, $bulanIndonesia, $tanggalearlyentry);

$dateMail = new DateTime($data->datemail);
$tanggaMail = $dateMail->format('d F Y');
$dateNewMail = str_replace($bulanInggris, $bulanIndonesia, $tanggalearlyentry);

?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cetak Dokumen</title>
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    <style>
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #fafafa;
            font: 12pt "Times New Roman", Times, serif;
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            font-size: 12px;
        }

        .page {
            width: 210mm;
            padding-top: 10px;
            min-height: 297mm;
            margin: 10mm auto;
            border: 1px #d3d3d3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .result-view {
            padding: 5mm 15mm 15mm 15mm;
        }

        .subpage {
            padding: 1cm;
            border: 5px red solid;
            height: 257mm;
            outline: 2cm #ffeaea solid;
        }

        td {
            padding-top: 5px;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }

            .result-view {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
    </style>
</head>

<body>
    <div class="book">
        <div class="page">
            <img src="{{ asset('kop.png') }}" style="width: 210mm" />
            <div class="result-view" id="result"></div>
        </div>
    </div>
    <div>

        <script>
            let text = "";
            let tanggal = new Date().getDate();
            let getBulan = new Date().getMonth();
            let bulan;
            let tahun = new Date().getFullYear();
            switch (getBulan) {
                case 0:
                    bulan = "Januari";
                    break;
                case 1:
                    bulan = "Februari";
                    break;
                case 2:
                    bulan = "Maret";
                    break;
                case 3:
                    bulan = "April";
                    break;
                case 4:
                    bulan = "Mei";
                    break;
                case 5:
                    bulan = "Juni";
                    break;
                case 6:
                    bulan = "Juli";
                    break;
                case 7:
                    bulan = "Agustus";
                    break;
                case 8:
                    bulan = "September";
                    break;
                case 9:
                    bulan = "Oktober";
                    break;
                case 10:
                    bulan = "November";
                    break;
                case 11:
                    bulan = "Desember";
                    break;
                default:
                    bulan = "Tidak ditemukan";
                    break;
            }
            const profile = [{
                fname: "Uzumaki",
                lname: "Naruto",
                level: "Genin",
                nationality: "Konoha Gakure",
            }, ];
            profile.forEach((element) => {
                text += `
        <div style="display:flex;align-items:center; flex-direction: column;">
                <h3 style="text-align: center; border-bottom: 1px solid #000; width:39%; margin:0;padding:0; font-size:16px">SURAT KETERANGAN MONDOK</h3>
                <p style="text-align: center;margin:0;padding:0">Nomor : {{ $data->nomail }}</p>
        </div>
      <table style="margin-top:15px">
        <tr>
          <td style="width: 100px;">Nama</td>
          <td>:</td>
          <td>&nbsp;{{ $data->fullname }}</td>
        </tr>
        <tr>
          <td style="width: 100px;">Tempat, Tanggal Lahir</td>
          <td>:</td>
          <td>&nbsp;{{ $data->placeofbirth }}, {{ $tanggalLahirBaru }}</td>
        </tr>
        <tr>
          <td style="width: 100px;">Jenis Kelamin</td>
          <td>:</td>
          <td>&nbsp;{{ $data->gender }}</td>
        </tr>
        <tr>
          <td style="width: 100px;">Kewarganegaraan/Suku</td>
          <td>:</td>
          <td>&nbsp;{{ $data->citizenship }}</td>
        </tr>
        <tr>
          <td style="width: 100px;">Agama</td>
          <td>:</td>
          <td>&nbsp;{{ $data->gender }}</td>
        </tr>
        <tr>
          <td style="width: 100px;">Pendidikan</td>
          <td>:</td>
          <td>&nbsp;{{ $data->education }}</td>
        </tr>
        <tr>
          <td style="width: 100px;">Pekerjaan</td>
          <td>:</td>
          <td>&nbsp;Pelajar</td>
        </tr>
        <tr>
          <td style="width: 100px;">Status Perkawinan</td>
          <td>:</td>
          <td>&nbsp;{{ $data->maritalstatus }}</td>
        </tr>
        <tr>
          <td style="width: 100px;">NIK</td>
          <td>:</td>
          <td>&nbsp;{{ $data->nik }}</td>
        </tr>
        <tr>
          <td style="width: 100px;">Alamat</td>
          <td>:</td>
          <td>&nbsp;{{ $data->address }}</td>
        </tr>
      </table>
      <p style="margin-top: 30px;line-height:1.5;text-align: justify">Menerangkan bahwa nama tersebut di atas benar-benar mondok di PONPES PANGGUNG kerangwaru, Kec. Tulungagung, Kab. Tulungagung sejak tanggal {{ $dateNewearlyentry }}.</p>
      <p style="line-height:1.5;text-align: justify">Surat permohonan ini dibuat untuk persyaratan permohonan daftar sekolah di SMA Negeri 1 Boyolangu.</p>
      <p style="line-height:1.5;text-align: justify">Demikian surat keterangan ini dibuat untuk menjadikan periksa dan dapatnya dipergunakan sebagai mana mestinya.</p>
      <div style="margin-top: 80px;float:right">
        <div style="width: 250px;text-align: left;">
          <p>Tulungagung, {{ $dateNewMail }}</p>
          <p>Kepala Pondok Pesantren</p>
          <p>Panggung Tulungagung</p>
          <img style="margin-top:10px; margin-bottom: 10px" src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data={{ $data->qrid }}"/>
          <p style="font-weight:bold;">KH. MUH. NURUL HUDA, SP., MA.</p>
        </div>
      </div>
      `;
            });
            let sekarang = `${tanggal} ${bulan} ${tahun}`;
            document.getElementById("result").innerHTML = text;
            // document.getElementById('tanggal').innerHTML = sekarang;
        </script>
</body>

</html>
