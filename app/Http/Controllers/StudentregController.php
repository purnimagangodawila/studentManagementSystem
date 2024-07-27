<?php

namespace App\Http\Controllers;

use App\Models\studentreg;
use App\Models\grade;
use App\Models\subject;
use Illuminate\Http\Request;

class StudentregController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentregs =Studentreg ::all();
        return view ('studentreg.index',compact('studentregs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades=Grade::all();
        $subjects =Subject::all();
        return view ("studentreg.create",compact('grades','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request =Studentreg::create($request->all());
        return redirect()->route("studentreg");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\studentreg  $studentreg
     * @return \Illuminate\Http\Response
     */
    public function show(studentreg $studentreg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studentreg  $studentreg
     * @return \Illuminate\Http\Response
     */
    public function edit(studentreg $studentreg,$id)
    {
        $studentreg  = Studentreg::find($id);
        $grades=Grade::all();
        $subjects =Subject::all();
        return view('studentreg.update', compact('studentreg','grades','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\studentreg  $studentreg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studentreg $studentreg,$id)
    {
        $studentreg = Studentreg::find($id);
        $studentreg->update(['student_name'=>$request->student_name,
                       'address'=>$request->address,
                       'phone_number'=>$request->phone_number,
                       'register_date'=>$request->register_date,
                       'gardian'=>$request->gardian,
                       'gardian_phone_number'=>$request->gardian_phone_number,
                       'grade_id'=>$request->grade_id,
                       'subject_id'=>$request->subject_id,

                    ]);

                    return $studentreg;

                  return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studentreg  $studentreg
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentreg $studentreg,$id)
    {
        $studentreg =Studentreg::find($id);
        $studentreg->delete();
        return redirect()->back();
    }
}
