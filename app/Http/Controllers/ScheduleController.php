<?php

namespace App\Http\Controllers;

use App\Models\schedule;
use App\Models\subject;
use App\Models\grade;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules=Schedule::all();
        return view ('schedule.index',compact('schedules'));
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
        return view ("schedule.create",compact('grades','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request= Schedule::create($request->all());
        return redirect ("schedule");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(schedule $schedule,$id)
    {
        $schedule=Schedule::find($id);
        $grades=Grade::all();
        $subjects =Subject::all();
        return view('schedule.update', compact('schedule','grades','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, schedule $schedule,$id)
    {
        $schedule = Schedule::find($id);
        $schedule->update(['grade_id'=>$request->grade_id,
                       'day'=>$request->day,
                       'time'=>$request->time,
                       'subject_id'=>$request->subject_id,
                       'teacher_name'=>$request->teacher_name,
                       'hall_number'=>$request->hall_number,

                    ]);
                    
                  return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(schedule $schedule,$id)
    {
        $schedule = Schedule::find($id);
        $schedule->delete();
        return redirect()->back();
    }
    public function timetable_interface(schedule $schedule)
    {
        $schedule = schedule::all();
        return view('timetable-interface', compact('schedule'));
    }
}
