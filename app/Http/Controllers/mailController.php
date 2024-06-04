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
        $pdf = Pdf::loadView('pdf.panggung', array('data' => $data));
        return $pdf->stream();
    }

    public function mailMia($id)
    {
        $data = student::findOrFail($id);
        $pdf = Pdf::loadView('pdf.mia', array('data' => $data));
        return $pdf->stream();
    }

    public function mailDT($id)
    {
        $data = student::findOrFail($id);
        $pdf = Pdf::loadView('pdf.dt', array('data' => $data));
        return $pdf->stream();
    }
}
