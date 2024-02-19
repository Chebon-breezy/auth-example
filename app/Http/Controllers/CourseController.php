<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function index(){
        //list all
        $Courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create(){
        //Routing to page/view which wil hold the create form
    }

    public function store(Request $request){
        //This will create the entry for the course

    }

    public function show($id){
        //fetching data from the Db
    }

    public function edit($id){
        // edit data
    }

    public function update(Request $request, $id){
        //logic to update record in Db and do something post that

    }

    public function destroy(){
        //delete entry from database
    }


}
