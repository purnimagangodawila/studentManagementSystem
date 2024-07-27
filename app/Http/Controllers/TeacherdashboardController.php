<?php

namespace App\Http\Controllers;

use App\Models\teacherdashboard;
use App\Models\grade;
use App\Models\subject;
use Illuminate\Http\Request;

class TeacherdashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacherdashboards=Teacherdashboard::all();
        return view ('teacherdashboard.index',compact("teacherdashboards"));
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
        return view ("teacherdashboard.create",compact('grades','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request=Teacherdashboard::create($request->all());
        return redirect ("teacherdashboard");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teacherdashboard  $teacherdashboard
     * @return \Illuminate\Http\Response
     */
    public function show(teacherdashboard $teacherdashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teacherdashboard  $teacherdashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(teacherdashboard $teacherdashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teacherdashboard  $teacherdashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teacherdashboard $teacherdashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teacherdashboard  $teacherdashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacherdashboard $teacherdashboard)
    {
        //
    }
}
