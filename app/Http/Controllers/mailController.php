<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;

class mailController extends Controller
{
    public function mailPP($id)
    {
        $data = student::findOrFail($id);

        // $date = new DateTime($data->dateofbirth);

        // // Format ulang tanggal menjadi "d F Y" (11 Mei 2024)
        // $tanggalBaru = $date->format('d F Y');

        // // Ganti nama bulan dari bahasa Inggris ke bahasa Indonesia
        // $bulanInggris = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        // $bulanIndonesia = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        // $tanggalLahirBaru = str_replace($bulanInggris, $bulanIndonesia, $tanggalBaru);

        // $dateStart = new DateTime($data->earlyentry);
        // $tanggalearlyentry = $dateStart->format('d F Y');
        // $dateNewearlyentry = str_replace($bulanInggris, $bulanIndonesia, $tanggalearlyentry);

        // $dateMail = new DateTime($data->datemail);
        // $tanggaMail = $dateMail->format('d F Y');
        // $dateNewMail = str_replace($bulanInggris, $bulanIndonesia, $tanggalearlyentry);

        // $htmlView = ;
        $pdf = Pdf::loadView('pdf.panggung', array('data' => $data));
        return $pdf->stream();
    }
}
