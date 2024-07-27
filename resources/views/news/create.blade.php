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
                    <h1 class="h2 mb-0 ls-tight">Add News </h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">



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
<div class="container p-5">
    <h2 class="mt-5">Add News</h2>
    <form method="POST" action="{{ route('news-store') }}">
        @csrf
        <div class="form-group">
            <label for="news_date">News Date:</label>
            <input type="date" id="news_date" name="news_date" class="form-control">
        </div>
        <div class="form-group">
            <label for="news_title">News Title:</label>
            <input type="text" id="news_title" name="news_title" class="form-control">
        </div>
        <div class="form-group">
            <label for="news_description">News Description:</label>
            <textarea id="news_content" name="news_content" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add News</button>
    </form>
</div>
@endsection
