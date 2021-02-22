<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function get_students() {
        static $students = array(0=>"Nurs",1=>"Arman",2=>"Gena");
        return $students;
    }

    public function get_dobs() {
        static $dob = array(0=>"01.01.1998",1=>"03.03.2000",2=>"05.05.1999");
        return $dob;
    }

    public function get_ages() {
        static $age = array(0=>"20",1=>"21",2=>"22");
        return $age;
    }

    public function show($id)
    {
        //
        $students = $this->get_students();
        $dob = $this->get_dobs();
        $age = $this->get_ages();
        return view("student_information",["name"=>$students[$id],"dob"=>$dob[$id],"age"=>$age[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
