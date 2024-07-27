@extends('dashboard')
@section('content')
<!-- Header -->
<header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight">Student Timetable</h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">

                        <a href="{{ route('schedule-add') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
                            <span class=" pe-2">
                                <i class="bi bi-plus"></i>
                            </span>
                            <span>Create</span>
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
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

    <h1>Update Student</h1>
    <form method="POST" action="{{ route('schedule-update', ['id' => $schedule->id]) }}">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="grade_id" class="form-label">Grade</label>
                        <select name="grade_id" class="form-control" id="grade_id" required>
                            <option value="">Select grade</option>
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->id }}"
                                    {{ $schedule->grade_id == $grade->id}}>
                                    {{ $grade->grade }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Day</label>
                    <input type="test" class="form-control" name="day" value="{{$schedule->day}}">
                </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Time</label>
                        <input type="test" class="form-control" name="time" value="{{$schedule->time}}">
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="subject_id" class="form-label">Subject</label>
                            <select name="subject_id" class="form-control" id="subject_id" required>
                                <option value="">Select Subject</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">
                                        {{ $schedule->subject_id == $subject->id }}>{{ $subject->subject }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                       <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Teacher</label>
                        <input type="test" class="form-control" name="teacher_name" value="{{$schedule->teacher_name}}">
                       </div>

                       <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Hall Number</label>
                        <input type="test" class="form-control" name="hall_number" value="{{$schedule->hall_number}}">
                       </div>

                  <button type="submit" class="btn btn-primary">Update</button>

            </div>
        </form>
   </div>
</div>
</div>
</div>

</main>
@endsection



