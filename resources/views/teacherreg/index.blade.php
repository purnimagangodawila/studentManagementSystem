@extends('dashboard')
@section('content')
<!-- Header -->
<header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight"> Teacher Registration</h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">

                        <a href="{{ route('teacherreg-add') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
                            <span class=" pe-2">
                                <i class="bi bi-plus"></i>
                            </span>
                            <span>Add student</span>
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
           div{
            color: rgb(13, 14, 13);

           }


            table {
              border-collapse: collapse;
              width: 100%;
            }

            th, td {
              text-align: left;
              padding: 8px;
            }
  </style>
</header>
<!-- Main -->
<main class="py-6 bg-surface-secondary">
   <div class="container-fluid">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <div style="overflow-x: auto;">
                    <table>
                      <tr>
                        <th>id</th>
                        <th scope="col">Teacher Name</th>
                        <th scope="col">Teacher Address</th>
                        <th scope="col">Teacher Phone Number</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">The Teaching Grade</th>
                        <th scope="col">The Teaching Subjects</th>
                        <th scope="col">Actions</th>

                      </tr>

    </thead>
    <tbody>


        @foreach($teacherregs as $teacherreg)


            <tr>
              <th scope="row">{{$teacherreg->id}}</th>
              <td>{{$teacherreg->teacher_name}}</td>
              <td>{{$teacherreg->address}}</td>
              <td>{{$teacherreg->phone_number}}</td>
              <td>{{$teacherreg->email}}</td>
              <td>{{$teacherreg->grade->grade}}</td>
              <td>{{$teacherreg->subject->subject}}</td>

              <td>


                <form action="{{route('teacherreg-destroy', $teacherreg->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Delete</button>
                    <a href="{{route('teacherreg-edit', $teacherreg->id)}}" class="btn btn-info">Edit</a>

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


