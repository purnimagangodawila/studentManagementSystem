<?php

namespace App\Http\Controllers;

use App\Models\teacherreg;
use App\Models\grade;
use App\Models\subject;
use Illuminate\Http\Request;

class TeacherregController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacherregs =Teacherreg ::all();
        return view ('teacherreg.index',compact('teacherregs'));
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
        return view ("teacherreg.create",compact('grades','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request=Teacherreg::create($request->all());
        return redirect()->route("teacherreg");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teacherreg  $teacherreg
     * @return \Illuminate\Http\Response
     */
    public function show(teacherreg $teacherreg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teacherreg  $teacherreg
     * @return \Illuminate\Http\Response
     */
    public function edit(teacherreg $teacherreg,$id)
    {
        $teacherreg=Teacherreg::find($id);
        $grades=Grade::all();
        $subjects =Subject::all();
        return view('teacherreg.update', compact('teacherreg','grades','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teacherreg  $teacherreg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teacherreg $teacherreg,$id)
    {
        $teacherreg = Teacherreg::find($id);
        $teacherreg->update(['teacher_name'=>$request->teacher_name,
                       'address'=>$request->address,
                       'phone_number'=>$request->phone_number,
                       'email'=>$request->email,
                       'subject_id'=>$request->subject_id,
                       'grade_id'=>$request->grade_id,


                    ]);
                    return $teacherreg;

                  return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teacherreg  $teacherreg
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacherreg $teacherreg,$id)
    {
        $teacherreg =Teacherreg::find($id);
        $teacherreg->delete();
        return redirect()->back();
    }
}
