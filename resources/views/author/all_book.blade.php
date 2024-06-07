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
    @include('author.css');
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
            @include('author.spinner');
        <!-- Spinner End -->


        <!-- Sidebar Start -->
            @include('author.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
                @include('author.navbar')
            <!-- Navbar End -->

            <h1 class="text-center display-6">All Book</h1>
            <div class="container">
            <table class="table border-2 border-white table-striped">
                        <thead>
                            <tr class="">
                            <th>Sno</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Cover Image</th>
                            <th>Book PDF</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($book as $b)
                           <tr>
                                <td>{{$b->id}}</td>
                                <td>{{$b->book_name}}</td>
                                <td>{{$b->book_desc}}</td>
                                <td>{{$b->author}}</td>
                                <td><img style="height : 50px" src="{{url('bookimage/' , $b->image)}}" alt="b_img"></td>
                                <td><a class="btn btn-primary" target="_blank" href="{{url('bookpdf/' , $b->file)}}">Read / Download Book</a></td>
                                <td><a href="" class="btn btn-info">Edit</a></td>
                                <td><a href="" class="btn btn-danger">Delete</a></td>
                            </tr>
                           @endforeach
                            
                           

                        </tbody>
                    </table>
            </div>







            <!-- Footer Start -->
                @include('author.footer');
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('author.script');
</body>

</html>


