<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Author Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="admin/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    @include('admin.css');
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
            @include('author.spinner');
        <!-- Spinner End -->


        <!-- Sidebar Start -->
            @include('author.sidebar');
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
                @include('author.navbar');
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
                @include('author.sales');
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
                @include('author.chart');
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
                @include('author.recent');
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
                @include('author.widgets');
            <!-- Widgets End -->


            <!-- Footer Start -->
                @include('author.footer');
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


