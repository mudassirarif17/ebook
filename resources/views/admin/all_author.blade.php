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

            <h1 class="text-center display-6">All Author</h1>
                <div class="container my-4">
                    <table class="table border-2 border-white table-striped">
                        <thead>
                            <tr class="">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>image</th>
                                <th>Address</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($author as $a)
                            @if ($a->usertype == 1)
                            <tr>
                                <td>{{$a->id}}</td>
                                <td>{{$a->name}}</td>
                                <td>{{$a->email}}</td>
                                <td>{{$a->phone}}</td>
                                <td>
                                    <img style="height : 50px" src="{{url('authorimage' , $a->image)}}" alt="Image">
                                </td>
                                

                                <td>{{$a->address}}</td>
                                <td><a href="{{url('edit_author' , $a->id)}}" class="btn btn-info text-white">Edit</a></td>
                                <td><a onclick="return confirm('Are You Sure to delete')" href="{{url('delete_author' , $a->id)}}" class="btn btn-danger">Delete</a></td>
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


