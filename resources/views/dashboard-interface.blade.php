
@extends('dashboard')
@section('content')
<header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight">Dashboard</h1>
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
    <div class="content">
    <div class="cards">
        <div class="card">
            <h3>Students</h3>
            <p>340</p>
        </div>

                <div class="card">
                    <h3>Teachers</h3>
                    <p>10</p>
                </div>

                        <div class="card">
                            <h3>Subjects</h3>
                            <p>8</p>
                        </div>
    </div>
            </div>


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
               <th>Subjects</th>
               <th>Price</th>
               <th>Teachers</th>
           </tr>
       </thead>
       <tbody>
           <tr>
               <td>Sinhala</td>

               <td><span class="price">Rs 1500</span></td>
               <td><span class="count">Mr.Pulasthi Sri Parakrama</span></td>
           </tr>
           <tr>
               <td>Maths</td>
               <td><span class="price">Rs 1300</span></td>
               <td><span class="count">Mr.Ruwan Samarathunge</span></td>
           </tr>
           <tr>
               <td>Science</td>
               <td><span class="price">Rs 1400</span></td>
               <td><span class="count">Mr.Pradeep Nandana</span></td>
           </tr>
           <tr>
               <td>Music</td>
               <td><span class="price">Rs 1200</span></td>
               <td><span class="count">Mrs.Vajira</span></td>
           </tr>
           <tr>
               <td>History</td>
               <td><span class="price">Rs 1400</span></td>
               <td><span class="count">Mr.Sadun Sri Adhikari</span></td>
           </tr>
           <tr>
               <td>Tamil</td>
               <td><span class="price">Rs 1300</span></td>
               <td><span class="count">Mr.Osman</span></td>
           </tr>
           <tr>
               <td>IT</td>
               <td><span class="price">Rs 1500</span></td>
               <td><span class="count">Mr.Chalitha Kunamrasinghe</span></td>
           </tr>
           <tr>
            <td>English</td>
            <td><span class="price">Rs 1200</span></td>
            <td><span class="count">Mr.Chandana Sumanawikrama</span></td>
        </tr>
       </tbody>
    </table>

   </div>

</body>
@endsection
