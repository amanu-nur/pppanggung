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

<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pondok Panggung</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            font-size: 12px;
            font-family: 12pt "Times New Roman", Times, serif;
        }

        .kop {
            max-width: 100%;
        }

        .mail-layout {
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
    </style>
</head>

<body>
    <img src="{{ asset('kop.png') }}" class="kop" />
    <div class="mail-layout">
        <div style="display:flex;align-items:center; flex-direction: column; justify-content:center">
            <h3 style="text-align: center; margin:0;padding:0; font-size:16px, font-weight: 800">
                SURAT KETERANGAN<br>
                <u>
                    DOMISILI PONDOK PESANTREN
                </u>
            </h3>
            <p style="text-align: center;margin:0;padding:0">Nomor : {{ $data->nomail }}</p>
        </div>
        <p style="margin-top: 30px;line-height:1.5;text-align: justify">Yang bertanda tangan dibawah ini Pengasuh Pondok
            Pesantren assalafiyah assyafi’iyah panggung Kabupaten Tulungagung :
        </p>
        <table style="margin-top:15px">
            <tr>
                <td style="width: 100px;">Nama</td>
                <td>:</td>
                <td>&nbsp;KH. Muh. Nurul Huda, SP., MA.</td>
            </tr>
            <tr>
                <td style="width: 100px;">Jabatan</td>
                <td>:</td>
                <td>&nbsp;Pengasuh Pondok</td>
            </tr>
            <tr>
                <td style="width: 100px;"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="width: 100px;">Menerangkan bahwa</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="width: 100px;"></td>
                <td></td>
                <td></td>
            </tr>
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
        <p style="margin-top: 30px;line-height:1.5;text-align: justify">Bahwa Santri tersebut benar-benar santri Pondok
            Pesantren assalafiyah assyafi’iyah PANGGUNG Kabupaten Tulungagung, dan berdomisili di PONPES PANGGUNG mulai
            tanggal {{ $dateNewearlyentry }} dan sampai sekarang masih aktif belajar di PONPES PANGGUNG.
        </p>
        <p style="line-height:1.5;text-align: justify; margin-top:25px">Demikian surat keterangan ini dibuat untuk
            menjadikan periksa dan
            dapatnya dipergunakan sebagai mana mestinya.</p>
        <div style="margin-top: 80px;float:right">
            <div style="width: 250px;text-align: left;">
                <p>Tulungagung, {{ $dateNewMail }}</p>
                <p>Kepala Pondok Pesantren</p>
                <p>Panggung Tulungagung</p>
                <img style="margin-top:10px; margin-bottom: 10px"
                    src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=http://36.91.75.35/student-view/{{ $data->qrid }}" />
                <p style="font-weight:bold;">KH. MUH. NURUL HUDA, SP., MA.</p>
            </div>
        </div>
    </div>

</body>

</html>
