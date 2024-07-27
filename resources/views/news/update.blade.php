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
                    <h1 class="h2 mb-0 ls-tight">news</h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">

                       {{-- <a href="{{ route('news-add') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">

                        </a>
                    </div>
                </div> --}}
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
<div class="container">
    <h2>Edit News</h2>
    <form method="POST" action="{{ route('news-update', $news->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="news_date">News Date:</label>
            <input type="date" id="news_date" name="news_date" class="form-control" value="{{ $news->news_date }}">
        </div>
        <div class="form-group">
            <label for="news_title">News Title:</label>
            <input type="text" id="news_title" name="news_title" class="form-control" value="{{ $news->news_title }}">
        </div>
        <div class="form-group">
            <label for="news_description">News Description:</label>
            <textarea id="news_description" name="news_content" class="form-control" rows="4">{{ $news->news_content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update News</button>
    </form>
</div>
@endsection
