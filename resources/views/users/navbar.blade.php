<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav m-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="coming-soon.html" class="nav-link">Coming Soon</a></li>
            <li class="nav-item"><a href="top-seller.html" class="nav-link">Top Seller</a></li>
            <li class="nav-item"><a href="book.html" class="nav-link">Books</a></li>
            <li class="nav-item"><a href="author.html" class="nav-link">Author</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            @if (Auth::user())
                <li class="nav-item"><x-app-layout>

                </x-app-layout></li>
            @else
            <li class="nav-item mt-3">
                <a href="/register" class="btn btn-warning text-dark">Register</a>
                <a href="/login" class="btn btn-warning text-dark">Login</a>
            </li>
            @endif


        </ul>
      </div>
    </div>
  </nav>
