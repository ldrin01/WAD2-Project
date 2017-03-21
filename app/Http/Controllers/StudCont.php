<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudCont extends Controller
{
    public function homePage(Request $request){

    	$students = Student::all();
    	return view('home',compact('students'));
    }
    public function regProcess(Request $request){
    	$id = $request->id;
    	$stud_no = $request->stud_no;
    	$fname = $request->fname;
    	$mname = $request->mname;
    	$lname = $request->lname;
    	$course = $request->course;
    	$town = $request->town;
    	$guardian = $request->guardian;
    	$contact_no = $request->contact_no;

    	$student = new Student;

    	$student->id = $id;
    	$student->id_number = $id_number;
    	$student->first_name = $first_name;
    	$student->last_name = $last_name;
    	$student->course = $course;
    	$student->city = $city;
    	$student->guardian = $guardian;
    	$student->contact_number = $contact_number;
    	$student->save();

    	$students = Student::all();
    	return view('complete',compact('students'),[
    		'id' => $id,
    		'id_number' => $id_number,
    		'first_name' => $first_name,
    		'last_name' => $last_name,
    		'course' => $course,
    		'city' => $city,
    		'guardian' => $guardian,
    		'contact_number' => $contact_number
    	]);
    }
}
