<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    private $students;

    public function __construct() {
        $this->students = config('students'); 
    }

    /**
     * Students page
     */

    public function index() {

        $students = $this->students;

        return view('students.index', compact('students'));
    }

    /**
     * Show pages details
     */

    public function show($id) {

        $student = $this->searchStudent($id, $this->students);

        if (! $student) {
            abort('404');
        }

        return view('students.show', compact('student'));
    }


        /**
     * Utilities
     */

    // check  if student exist by id

    private function searchStudent($id, $array) {
        foreach ($array as $student) {
            if  ($student['id'] == $id) {
                return $student;
            } 
        }

        return false;
    }
}


