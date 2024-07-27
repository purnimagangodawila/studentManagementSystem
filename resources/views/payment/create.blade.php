<!-- Header -->
@extends('dashboard')
@section('content')
<header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight">Payment</h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">

                        <a href="{{ route('payment-store') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">


                        </a>
                    </div>
                </div>
            </div>
            <!-- Nav -->
            <ul class="nav nav-tabs mt-4 overflow-x border-0">
                {{--  <li class="nav-item ">
                    <a href="#" class="nav-link active">All files</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link font-regular">Shared</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link font-regular">File requests</a>
                </li>  --}}
            </ul>
        </div>
    </div>


</header>
<!-- Main -->
<main class="py-6 bg-surface-secondary">
   <div class="container-fluid">
    <div class="py-12">
        <form action="{{ route('payment-store') }}"method="POST">
            @csrf


            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Payment Date</label>
                <input type="date" class="form-control" name="payment_date">
               </div>


               <div class="mb-3">
                <label for="subject_id" class="form-label">Subject</label>
                <select name="subject_id" class="form-control" id="subject_id" required>
                    <option value="">Select Subject</option>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
                    @endforeach
                </select>
            </div>

                 <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Student</label>
                    <input type="test" class="form-control" name="student_id">
                   </div>

                   <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Amount</label>
                    <input type="test" class="form-control" name="payment">
                   </div>



                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>


          </div>


   </div>
</main>
@endsection


