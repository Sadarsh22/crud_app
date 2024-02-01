<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('applicationForm');
    }

    /**
     * view the form for creating a new resource.
     */
    public function view(Student $student, string $id)
    {
        $student = student::find($id);
        return view('viewStudent', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            array(
                'name' => $request->fname,
                'password' => $request->lname,
                'email' => $request->email,
                'password'=>$request->password
            ),
            array(
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8'
                )
        );

        if ($validator->fails())
    {
        print_r($validator);
        return Redirect::back()->withErrors($validator);
        
    }

        $student = new Student();
        $student->first_name = $request->fname;
        $student->last_name = $request->lname;
        $student->email = $request->email;
        $student->image = $request->fileToUpload->getClientOriginalName();
        $student->password = $request->passsword;
        if ($request->hasFile('fileToUpload')) {
            $file = $request->file('fileToUpload');
            $file->move('myImages', $file->getClientOriginalName());
        }
        $student->save();
        return redirect('/listingPage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $student = Student::all();
        return view('listingPage', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student, $id)
    {
        $student = student::find($id);
        return view('editStudent', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = student::find($id);
        $student->first_name = $request->fname;
        $student->last_name = $request->lname;
        $student->email = $request->email;
        if ($request->fileToUpload) {
            $student->image = $request->fileToUpload->getClientOriginalName();
            $file = $request->file('fileToUpload');
            $file->move('myImages', $file->getClientOriginalName());
        }
        $student->password = $request->passsword;

        $student->update();
        return redirect('/listingPage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student, string $id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect('/listingPage');
    }
}
