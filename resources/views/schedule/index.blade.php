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

    <style>
        body{
            background-image: url("student.avif");
        }
h5{
                      text-align: center;
                      font-family: verdana;
                      font-size: 20px;
}
    </style>
</header>

<body>
    <h5> Time Table  </h5>
<h5> June </h5>

</body>

<!-- Main -->
<main class="py-6 bg-surface-secondary">
   <div class="container-fluid">
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="row">id</th>

                            <th scope="col">Grade</th>
                            <th scope="col">Day</th>
                            <th scope="col">Time</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Teacher</th>
                            <th scope="col">Hall Number</th>
                        </tr>

                    </thead>
                    <tbody>
                       @foreach($schedules as $schedule)
                      <tr>
                            <th scope="row">{{$schedule->id}}</th>
                            <td>{{$schedule->grade->grade}}</td>
                            <td>{{$schedule->day}}</td>
                            <td>{{$schedule->time}}</td>
                            <td>{{$schedule->subject->subject}}</td>
                            <td>{{$schedule->teacher_name}}</td>
                            <td>{{$schedule->hall_number}}</td>
                            <td>
                                <form action="{{route('schedule-destroy', $schedule->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Delete</button>
                                    <a href="{{route('schedule-edit', $schedule->id)}}" class="btn btn-info">Edit</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
   </div>
</main>

@endsection


