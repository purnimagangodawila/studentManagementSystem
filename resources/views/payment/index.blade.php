@extends('dashboard')
@section('content')
<!-- Header -->
<header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight">Payment</h1>
                </div>
                <!-- Actions -->
                <div class="col-sm-6 col-12 text-sm-end">
                    <div class="mx-n1">

                        <a href="{{ route('payment-add') }}" class="btn d-inline-flex btn-sm btn-primary mx-1">
                            <span class=" pe-2">
                                <i class="bi bi-plus"></i>
                            </span>
                            <span>Add Payment</span>
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


<table class="table">
    <thead>
        <tr>
            <th scope="row">id</th>

            <th scope="col">Payment Date</th>
            <th scope="col">Subject</th>
            <th scope="col">Student</th>
            <th scope="col">Amount</th>


        </tr>

    </thead>
    <tbody>


        @foreach($payments as $payment)

        <tr>
            <th scope="row">{{$payment->id}}</th>
            <td>{{$payment->payment_date}}</td>
            <td>{{$payment->subject ? $payment->subject->subject : 'No subject' }}</td>
            <td>{{$payment->student_id}}</td>
            <td>{{$payment->payment}}</td>
        </tr>


             <td>


                <form action="{{route('payment-destroy', $payment->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Delete</button>
                    <a href="{{route('payment-edit', $payment->id)}}" class="btn btn-info">Edit</a>

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


