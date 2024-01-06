<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    
    public function index(){
        //List all

        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create(){
        //Routing to the views wich will hold the create form

    }

    public function store(Request $request){
        //This will create the entry for the course

    }

    public function show($id){
        //Fetching the data from the database

    }

    public function edit($id){
        //Edit the data
    }

    public function update(Request $request, $id){
        //Logic to update the record in the database and do somthing about it

    }

    public function destroy($id){
        //Destroy the entry from the database

    }
}
