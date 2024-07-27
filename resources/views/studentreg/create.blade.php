@extends('dashboard')
@section('content')
<!-- Header -->
<header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight">Student Registration</h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">

                        <a href="{{ route('studentreg-store') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">

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
        <form action="{{ route('studentreg-store') }}"method="POST">
            @csrf

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Student FullName</label>
                  <input type="test" class="form-control" name="student_name">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Student Address</label>
                  <input type="test" class="form-control" name="address">
                 </div>

                 <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Student Phone Number</label>
                    <input type="test" class="form-control" name="phone_number">
                   </div>

                   <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Registration Date</label>
                    <input type="date" class="form-control" name="register_date">
                   </div>

                   <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gardian Name</label>
                    <input type="test" class="form-control" name="gardian">
                   </div>
<div class = "mb-3">
    <label for="exampleInputPassword" class="form-lable">Gender</label>
    <input type="test" ckass ="form-control" >
    <select option>Mail</select>
    <section option Femail</select>

                   <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gardian Phone Number</label>
                    <input type="test" class="form-control" name="gardian_phone_number">
                   </div>

                   <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Grade</label>
                    <select name="grade_id" class="form-control" id="grade_id"  required>
                        <option value="">Select grade</option>
                        @foreach($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->grade }}</option>
                          @endforeach
                        </select>
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

