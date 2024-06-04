<?php

namespace App\Http\Controllers;

use App\Models\student as ModelsStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class student extends Controller
{
    public function index()
    {

        return view('pages.add');
    }

    public function edit($id)
    {
        $data = ModelsStudent::find($id);
        return view('pages.edit', ['data' => $data]);
    }




    public function store(Request $request)
    {
        try {
            $request->validate([
                'fullname' => ['required', 'unique:students'],
                'placeofbirth' => ['required'],
                'dateofbirth' => ['required'],
                'citizenship' => ['required'],
                'religion' => ['required'],
                'education' => ['required'],
                'work' => ['required'],
                'maritalstatus' => ['required'],
                'nik' => ['required', 'max:16', 'min:16'],
                'address' => ['required'],
                'datemail' => ['required'],
                'nomail' => ['required'],
                'earlyentry' => ['required'],
                'gender' => ['required']
            ]);

            $qrid = bin2hex(random_bytes(32));

            $new_data = [
                'fullname' => $request->fullname,
                'placeofbirth' => $request->placeofbirth,
                'dateofbirth' => $request->dateofbirth,
                'citizenship' => $request->citizenship,
                'religion' => $request->religion,
                'education' => $request->education,
                'work' => $request->work,
                'maritalstatus' => $request->maritalstatus,
                'nik' => $request->nik,
                'address' => $request->address,
                'datemail' => $request->datemail,
                'nomail' => $request->nomail,
                'earlyentry' => $request->earlyentry,
                'gender' => $request->gender,
                'qrid' => $qrid
            ];


            ModelsStudent::create($new_data);

            return redirect()->to(route('dashboard.index'))->with('success', 'Data Berhasil di Simpan');
        } catch (\Illuminate\Validation\ValidationException $validationException) {
            return redirect()->back()->withInput()->withErrors($validationException->errors());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validateData = $request->validate([
                'fullname' => ['required'],
                'placeofbirth' => ['required'],
                'dateofbirth' => ['required'],
                'citizenship' => ['required'],
                'religion' => ['required'],
                'education' => ['required'],
                'work' => ['required'],
                'maritalstatus' => ['required'],
                'nik' => ['required', 'max:16', 'min:16'],
                'address' => ['required'],
                'datemail' => ['required'],
                'nomail' => ['required'],
                'earlyentry' => ['required'],
                'gender' => ['required']
            ]);


            $data = ModelsStudent::findOrFail($id);
            $data->update($validateData);
            return redirect()->to(route('dashboard.index'))->with('success', 'Data Berhasil di Update');
        } catch (\Illuminate\Validation\ValidationException $validationException) {
            return redirect()->back()->withInput()->withErrors($validationException->errors());
        }
    }


    public function destroy($id)
    {
        $office = ModelsStudent::findOrFail($id);
        $office->delete();
        return redirect()->back()->with('success', 'Data berhasil di Hapus');
    }
}
