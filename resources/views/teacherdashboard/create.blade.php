@extends('dashboard')
@section('content')
<!-- Header -->
<header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight">Teacher Table</h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">

                        <a href="{{ route('teacherdashboard-store') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">

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
        <form action="{{ route('teacherdashboard-store') }}"method="POST">
            @csrf



                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Student FullName</label>
                  <input type="test" class="form-control" name="student_id">
                   @foreach($studentregs as $studentreg)
                   <option value="{{ $studentreg->id }}">{{ $studentreg->studentreg }}</option>
                  @endforeach
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">The Teaching Grade</label>
                    <select name="grade_id" class="form-control" id="grade_id"  required>
                        <option value="">Select grade</option>
                        @foreach($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->grade }}</option>
                          @endforeach
                        </select>
                   </div>

                   <div class="mb-3">
                    <label for="subject_id" class="form-label">The Teaching Subject</label>
                    <select name="subject_id" class="form-control" id="subject_id" required>
                        <option value="">Select Subject</option>
                        @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
                        @endforeach
                    </select>
                </div>

                   <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">time</label>
                    <input type="time" class="form-control" name="time">
                   </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>


          </div>


   </div>
</main>
@endsection


