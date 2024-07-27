@extends('dashboard')
@section('content')
<!-- Header -->
<header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight">Teacher Registration</h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">

                        <a href="{{ route('teacherreg-add') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
                            <span class=" pe-2">
                                <i class="bi bi-plus"></i>
                            </span>
                            <span>update</span>
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">



<h1>Update Student</h1>
<form method="POST" action="{{route('teacherreg-update', $teacherreg->id)}}">
    @csrf
    <div class="row">
        <div class="col-6">



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Teacher FullName</label>
                <input type="test" class="form-control" name="teacher_name" value="{{$teacherreg->teacher_name}}"
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Teacher Address</label>
                <input type="test" class="form-control" name="address" value="{{$teacherreg->address}}">
            </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Teacher Phone Number</label>
                    <input type="test" class="form-control" name="phone_number" value="{{$teacherreg->phone_number}}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" value="{{$teacherreg->email}}">
                   </div>


                   <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Grade</label>
                    <select name="grade_id" class="form-control" id="grade_id" required>
                        <option value="">Select grade</option>
                        @foreach($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $teacherreg->grade_id == $grade->id}}>{{$grade->grade }}</option>
                          @endforeach
                        </select>
                   </div>


                   <div class="mb-3">
                    <label for="subject_id" class="form-label">Subject</label>
                    <select name="subject_id" class="form-control" id="subject_id" required>
                        <option value="">Select Subject</option>
                        @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $teacherreg->subject_id == $subject->id}}>{{ $subject->subject }}</option>
                        @endforeach
                    </select>
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
