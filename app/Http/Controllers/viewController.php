<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function index($qrid)
    {
        $data = student::where('qrid', $qrid)->get();
        return view('pages.studentview', ['data' => $data]);
    }
}
