<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(users/images/about-1.jpg);">
            </div>
            <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
      <div class="heading-section">
          <span class="subheading">Welcome To Publishing Company</span>
        <h2 class="mb-4">Publishing Company Created By Authors</h2>

        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

        <a href="#" class="btn btn-primary">View All Our Authors</a>
      </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
<div class="container-fluid px-md-4">
    <div class="row justify-content-center pb-5 mb-3">
  <div class="col-md-7 heading-section text-center ftco-animate">
      <span class="subheading">Books</span>
    <h2>New Release</h2>
  </div>
</div>
    <div class="row">
        @foreach($book as $b)
        <div class="col-md-6 col-lg-4 d-flex">
            <div class="book-wrap d-lg-flex">
                <div class="img d-flex justify-content-end" style="background-image: url({{url('bookimage/' , $b->image)}})">
                    <div class="in-text">
                        <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Add to cart">
                            <span class="flaticon-shopping-cart"></span>
                        </a>
                        <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                            <span class="flaticon-heart-1"></span>
                        </a>
                        <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Quick View">
                            <span class="flaticon-search"></span>
                        </a>
                        <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Compare">
                            <span class="flaticon-visibility"></span>
                        </a>
                    </div>
                </div>
                <div class="text p-4">
                    <p class="mb-2"><span class="price">Price : {{$b->type}}</span></p>
                    <h2><a href="#">{{$b->book_name}}</a></h2>
                    <span class="position">{{$b->book_desc}}</span>
                    <span class="position">Author : {{$b->author}}</span>
                    @if($b->type == "free")
    <a href="{{url('bookpdf/' , $b->file)}}" class="btn btn-dark">Read Book</a>
@else
    @if(Auth::id())
        @php
            $hasPendingRequest = false;
            $hasApprovedRequest = false;
        @endphp
        @foreach($status as $s)
            @if($s->userId == Auth::id())
                @if($s->status == "Approved" && $s->bookId == $b->id)
                    @php
                        $hasApprovedRequest = true;
                    @endphp
                    @break
                @elseif($s->status == "Pending" && $s->bookId == $b->id)
                    @php
                        $hasPendingRequest = true;
                    @endphp
                    @break
                @endif
            @endif
        @endforeach

        @if($hasApprovedRequest)
            <a href="{{url('bookpdf/' , $b->file)}}" class="btn btn-dark">Read Book</a>
        @elseif($hasPendingRequest)
            <p>Request Is Pending</p>
            <a href="{{url('cancel_req' , $s->id)}}" class="btn btn-dark">Cancel Request</a>
        @else
            <a href="{{url('book_req' , $b->id)}}" class="btn btn-dark">Purchase Book</a>
        @endif
    @else
        <a class="btn btn-dark" href="/login">Authenticate</a>
    @endif
@endif

                </div>
            </div>
        </div>
        @endforeach

        
        
        
        
    </div>
</div>
</section>
