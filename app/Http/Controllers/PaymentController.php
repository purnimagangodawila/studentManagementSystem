<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Models\subject;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments =Payment ::all();
        return view ('payment.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $subjects = Subject::all();
    return view("payment.create", compact('subjects'));
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request=Payment::create($request->all());
        return redirect ("payment");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(payment $payment,$id)
    {
        $payment=Payment::find($id);

        $subjects =Subject::all();
        return view('payment.update', compact('payment','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment $payment,$id)
    {
        $payment = Payment::find($id);
        $payment->update(['payment_date'=>$request->payment_date,
                       'subject_id'=>$request->subject_id,
                       'student'=>$request->student_id,
                       'amount'=>$request->amount,

                    ]);
                    return $payment;

                  return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $payment,$id)
    {
        $payment = Payment::find($id);
        $payment->delete();
        return redirect()->back();
    }
}
