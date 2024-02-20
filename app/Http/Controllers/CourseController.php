<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function index(){
        //list all
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create(){
        //Routing to page/view which wil hold the create form
        return view('course.create');
    }

    public function store(Request $request){
        //This will create the entry for the course
        $course = new Course();
        $course->title = $request->input('title');
        // Add more fields as needed
        $course->save();
        
        return redirect()->route('courses.index');

    }

    public function show($id){
        //fetching data from the Db
        $course = Course::findOrFail($id);
        return view('course.show', compact('course'));
    }

    public function edit($id){
        // edit data
        $course = Course::findOrFail($id);
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, $id){
        //logic to update record in Db and do something post that
        $course = Course::findOrFail($id);
        $course->title = $request->input('title');
        // Update more fields as needed
        $course->save();

        return redirect()->route('courses.index');

    }

    public function destroy($id){
        //delete entry from database
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index');
    }


}
