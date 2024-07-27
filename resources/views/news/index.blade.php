@extends('dashboard')
@section('content')

<section>
<!-- Header -->
<header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight">news</h1>
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
    <h2 class="mt-5 mb-5">News Dashboard</h2>
    <a href="{{ route('news-add') }}" class="btn btn-primary">Add News</a>
    <table class="table">
        <thead>
            <tr>
                <th>News Date</th>
                <th>News Title</th>
                <th>News Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $news)
                <tr>
                    <td>{{ $news->news_date }}</td>
                    <td>{{ $news->news_title }}</td>
                    <td>{{ $news->news_content }}</td>
                    <td>
                        <form action="{{route('news-destroy', $news->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                            <a href="{{route('news-edit', $news->id)}}" class="btn btn-info">Edit</a>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
