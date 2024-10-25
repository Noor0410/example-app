<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{

  public function index(){$data = Course::get();
      return view('course.index',  compact('data'));}


  public function create(){
      return view('course.create');}

  public function store(Request $request){  

            $validate = $request->validate([
            'title' => 'required|max:255',
            'credit_hrs' => 'required|integer|min:1|max:4',
        ]);

        try
        {
            if($validate)
            {
                Course::create($request->all());
                Session::flash('message', 'Course created successfully!');
                Session::flash('alert-class', 'alert-success');
            } else{
                Session::flash('message', 'Error. Validation failed.');
                Session::flash('alert-class', 'alert-danger');
            }
        } catch (\Exception $e)
        {
            Session::flash('message', 'Something went wrong. Please try again later.');
            Session::flash('alert-class', 'alert-danger');
        }
        return redirect(route('course.index'));
    }

}