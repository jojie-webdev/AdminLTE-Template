<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use DB;

class StudentController extends Controller
{
    public function index()
    {
        //Display All User from database
        $users = DB::table('users')->simplePaginate(6);
        return view('students.index', ['users' => $users]);
    }

    public function addGrades($id)
    {
        return view('students.add_grades', ['user' => User::findOrFail($id)]);
    }
}
