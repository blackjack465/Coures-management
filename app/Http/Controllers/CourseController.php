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

        return view('course.create');

    }

    public function store(Request $request){
        //This will create the entry for the course
        // Validation rules
    $rules = [
        'title' => 'required|string|max:255',
        'instructor' => 'required|string|max:255',
        'courseHead' => 'required|string|max:255',
    ];

    // Custom error messages
    $messages = [
        'required' => 'The :attribute field is required.',
        'string' => 'The :attribute must be a string.',
        'max' => 'The :attribute must not exceed :max characters.',
    ];

    // Validate the request
    $request->validate($rules, $messages);

    // If the validation passes, create the course
    
    Course::create($request->all());

    //Redirect the user to the main page

    return redirect()->route('course.index');
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
