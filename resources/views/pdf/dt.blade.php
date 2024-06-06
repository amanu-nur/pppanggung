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
$dateNewMail = str_replace($bulanInggris, $bulanIndonesia, $tanggaMail);

?>

<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pondok Darul Takwa</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            font-size: 14px;
            font-family: "Times New Roman", Times, serif;
        }

        .kop {
            max-width: 100%;
        }

        .mail-layout {
            padding: 5mm 25mm 25mm 25mm;
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

        .ttd-container {
            position: relative;
            display: inline-block;
        }

        .ttd-container img {
            display: block;
            width: 80%;
            height: auto;
        }

        .overlay-text {
            position: absolute;
            top: -35px;
            left: 0;
            width: 100%
        }
    </style>
</head>

<body>
    <img src="{{ asset('kopdt.jpeg') }}" class="kop" />
    <div class="mail-layout">
        <div style="display:flex;align-items:center; flex-direction: column; justify-content:center">
            <h3 style="text-align: center; margin:0;padding:0; font-size:16px, font-weight: 800">
                <u>
                    SURAT KETERANGAN MONDOK
                </u>
            </h3>
            <p style="text-align: center;margin:0;padding:0">Nomor: {{ $data->nomail }}</p>
        </div>
        <table style="margin-top:15px">
            <tr>
                <td style="width: 150px;">Nama</td>
                <td>:</td>
                <td>&nbsp;{{ $data->fullname }}</td>
            </tr>
            <tr>
                <td style="width: 150px;">Jenis Kelamin</td>
                <td>:</td>
                <td>&nbsp;{{ $data->gender }}</td>
            </tr>
            <tr>
                <td style="width: 150px;">Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td>&nbsp;{{ $data->placeofbirth }}, {{ $tanggalLahirBaru }}</td>
            </tr>
            <tr>
                <td style="width: 150px;">Kewarganegaraan/Suku</td>
                <td>:</td>
                <td>&nbsp;{{ $data->citizenship }}</td>
            </tr>
            <tr>
                <td style="width: 150px;">Agama</td>
                <td>:</td>
                <td>&nbsp;{{ $data->religion }}</td>
            </tr>
            <tr>
                <td style="width: 150px;">Pendidikan</td>
                <td>:</td>
                <td>&nbsp;{{ $data->education }}</td>
            </tr>
            <tr>
                <td style="width: 150px;">Pekerjaan</td>
                <td>:</td>
                <td>&nbsp;{{ $data->work }}</td>
            </tr>
            <tr>
                <td style="width: 150px;">Status Perkawinan</td>
                <td>:</td>
                <td>&nbsp;{{ $data->maritalstatus }}</td>
            </tr>
            <tr>
                <td style="width: 150px;">NIK</td>
                <td>:</td>
                <td>&nbsp;{{ $data->nik }}</td>
            </tr>
        </table>
        <p style="margin-top: 30px;line-height:1.5;text-align: justify">Menerangkan bahwa nama tersebut diatas benar
            benar mondok di Pondok Pesantren "Darut Taqwa" Desa Beji, Kecamatan Boyolangu, Kabupaten Tulungagung sejak
            {{ $dateNewearlyentry }}.
        </p>
        <p style="line-height:1.5;text-align: justify; margin-top:15px">Surat Keterangan ini dibuat untuk persyaratan
            permohonan daftar sekolah di SMA 1 Negeri Boyolangu.</p>
        <p style="line-height:1.5;text-align: justify; margin-top:15px">Demikian Surat Keterangan ini dibuat untuk
            menjadikan diperiksa dan dapat dipergunakan sebagaimana semestinya.</p>
        <div style="margin-top: 80px;float:right">
            <div style="width: 250px;text-align: center;" class="ttd-container">
                <img style="margin-top:10px; margin-bottom: 10px" src="{{ asset('ttddt.png') }}" width="165" />
                <div class="overlay-text">
                    <p style="text-align:center;">Tulungagung, {{ $dateNewMail }}</p>
                    <p style="text-align:center;">Kepala Pondok Pesantren</p>
                    <p style="text-align:center;">DARUT TAQWA</p>
                    <p style="font-weight:bold;text-align:center; margin-top:60px"><u>LATIFUL ANWAR, S.Pd.I</u></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
