<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view("list", ["students" => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $student = new Student();
        // insert data satu per satu
        $student->name = $data['nama'];
        $student->gender = $data['gender'];
        $student->nisn = $data['nisn'];
        $student->no_telepon = $data['telepon'];
        // Simpan data
        $student->save();
        // redirect ke halaman awal dengan "membawa" session yang berisi pesan
        return redirect("/")->with("success", "Data siswa berhasil disimpan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $student = Student::find($student)->first();
        return view("edit", ["student" => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->all();
        // insert data satu per satu
        $student->name = $data['nama'];
        $student->gender = $data['gender'];
        $student->nisn = $data['nisn'];
        $student->no_telepon = $data['telepon'];
        // Simpan data yang telah diupdate
        $student->save();
        return redirect("/")->with("success", "Data siswa berhasil diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect("/")->with("success", "Data siswa berhasil dihapus!");
    }
}
