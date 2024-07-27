
@extends('dashboard')
@section('content')
<header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight"> Teacher Dashboard</h1>
                </div>
                <!-- Actions -->

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
    <head>
<style>
    body{

    }
    .content {
        padding: 20px;
        flex: 1;
        background-color: #e9ecef;
    }

    .cards {
        display: flex;
        gap: 20px;
    }

    .card {
        flex: 1;
        padding: 20px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin:5px;
    }

    .card h3 {
        margin-bottom: 10px;
    }

    .card p {
        margin: 0;
    }
</style>
    </head>
</header>
<body>

<br>
<br>
<br>
<div class="container-fluid">
    <div class="mb-npx">
        <div class="row align-items-center">
<div class="col-sm-6 col-12 mb-4 mb-sm-0">
    <!-- Title -->
    <h1 class="h2 mb-0 ls-tight">Summary</h1>
</div>

    <table class="table">
       <thead>
           <tr>
               <th>Teacher Name</th>
               <th>Subjects</th>
               <th>Class fee</th>
               <th>Number of students studying</th>
               <th>Grade</th>

           </tr>
       </thead>
       <tbody>
           <tr>
               <td>Mr Pulasthi sri Parakrama</td>
               <td><span class="test">Sinhala</span></td>
               <td><span class="price">Rs 1500</span></td>
               <td><span class="count">20</span></td>
               <td><span class="count">10,11</span></td>


           </tr>
           <tr>
               <td>Mr.Ruwan Samarathunga</td>
               <td><span class="price">Maths</span></td>
               <td><span class="count">RS 1300</span></td>
               <td><span class="count">30</span></td>
               <td><span class="count">6,7,8,9,10,11</span></td>

           </tr>

           <tr>
            <td>Mr.Osman</td>
            <td><span class="price">Tamil</span></td>
            <td><span class="count">RS 1200</span></td>
            <td><span class="count">40</span></td>
            <td><span class="count">6,7,8,9,10,11</span></td>

           </tr>

           <tr>
            <td>Mr.Sadun Sri Adhikari</td>
            <td><span class="price">History</span></td>
            <td><span class="count">RS 1200</span></td>
            <td><span class="count">50</span></td>
            <td><span class="count">10,11</span></td>

           </tr>

           <tr>
               <td>Mr.Pradeep Nandana</td>
               <td><span class="price">Science</span></td>
               <td><span class="count">RS 1300</span></td>
               <td><span class="count">50</span></td>
               <td><span class="count">7,8,9,10,11</span></td>

           </tr>

           <tr>
               <td>Mr.Chandana Sumanawicrama</td>
               <td><span class="price">English</span></td>
               <td><span class="count">RS 1200</span></td>
               <td><span class="count">30</span></td>
               <td><span class="count">6,7,8,9,10,11</span></td>

           </tr>

           <tr>
               <td>Mr.Malshan Jayasekara</td>
               <td><span class="price">Science</span></td>
               <td><span class="count">RS 1300</span></td>
               <td><span class="count">40</span></td>
               <td><span class="count">6</span></td>

           </tr>

           <tr>
            <td>Miss.Kanishka Kulathunga</td>
               <td><span class="price">Sinhala</span></td>
               <td><span class="count">RS 1300</span></td>
               <td><span class="count">30</span></td>
               <td><span class="count">6,7,8,9</span></td>

        </tr>

        <tr>
                <td>Mrs.Vajira</td>
               <td><span class="price">Music</span></td>
               <td><span class="count">RS 1400</span></td>
               <td><span class="count">20</span></td>
               <td><span class="count">6,7,8,9,10,11</span></td>

        </tr>

        <tr>
            <td>Mr.Chalitha Kumarasinghe</td>
           <td><span class="price">Maths</span></td>
           <td><span class="count">RS 1300</span></td>
           <td><span class="count">30</span></td>
           <td><span class="count"></span></td>

    </tr>
       </tbody>
    </table>

   </div>

</body>
@endsection
