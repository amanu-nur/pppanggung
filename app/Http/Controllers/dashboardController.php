<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $data = student::all();

        // return dd($data);
        return view('dashboard', ['data' => $data]);
    }
}
