@extends('dashboard')
@section('content')
<section>
<!-- Header -->
<header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight">Subject</h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">

                        <a href="{{ route('subject-store') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">

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
        <form action="{{ route('subject-store') }}"method="POST">
            @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Subject</label>
                  <input type="test" class="form-control" name="subject">
                </div>

                   <button type="submit" class="btn btn-primary">Save</button>
                   <button type="submit" class="btn btn-primary">Back</button>
                 </form>

          </div>
   </div>
</main>
</section>
@endsection

