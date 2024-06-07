<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="admin/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    @include('admin.css')
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
            @include('admin.spinner')
        <!-- Spinner End -->


        <!-- Sidebar Start -->
            @include('admin.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
                @include('admin.navbar')
            <!-- Navbar End -->

            <h1 class="text-center display-6">All Book Requests</h1>
                <div class="container my-4">
                    <table class="table border-2 border-white table-striped">
                        <thead>
                            <tr class="">
                                <th>User Id</th>
                                <th>User name</th>
                                <th>User Email</th>
                                <th>user Phone</th>
                                <th>Book Id</th>
                                <th>Status</th>
                                <th>Approved</th>
                                <th>Canceled</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($req as $r)
                            @if($r->status == "Pending")
                            <tr>
                                <td>{{$r->userId}}</td>
                                <td>{{$r->userName}}</td>
                                <td>{{$r->userEmail}}</td>
                                <td>{{$r->userPhone}}</td>
                                <td>{{$r->bookId}}</td>
                                <td>{{$r->status}}</td>
                                <td><a onclick="return confirm('Are You Sure To Approved This Request')" href="{{url('approved_req' , $r->id)}}" class="btn btn-info text-white">Approved</a></td>
                                <td><a onclick="return confirm('Are You Sure To Canceled This Request')" href="{{url('canceled_req' , $r->id)}}" class="btn btn-danger">Canceled</a></td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>






            <!-- Footer Start -->
                @include('admin.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('admin.script');
</body>

</html>


