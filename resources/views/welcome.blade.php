@extends('layouts.app')

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000" >
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('images/book1.jpg')}}" alt="Books" class="img-responsive" />

            </div>
           <!-- <div class="item">
                <img src="/public/images/book2.jpg" alt="Books" class="img-responsive" />

            </div>
            <div class="item">
                <img src="/public/images/book3.jpg" alt="Books" class="img-responsive" />

            </div>
            <div class="item">
                <img src="/public/images/book4.jpg" alt="Books" class="img-responsive" />

            </div>-->
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h2>Welcome to the our wonderful world of books</h2>
            <p>Quality books was established to offer a range of authors on interesting topics for curious minds. So if you need  time out on your holiday,  or time chilling at the beach just select a book and as you turn the pages indulge yourself to a good read. </p>
        </div>
        <div class="col-md-4">
            <h2>How to decide on the right book to suit you</h2>
            <p>At quality books we know different books appeal to different people. So to make it easier you can search a category and simply select books that are interesting then place an order.</p>
        </div>
        <div class="col-md-4">
            <h2>Overview of Book Categories</h2>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center"><a , , href="/Books/IndexByCategory?categoryId=1">Maori Culture</a>
                    <span class="badge badge-primary badge-pill">0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"><a , , href="/Books/IndexByCategory?categoryId=2">Sports</a>
                    <span class="badge badge-primary badge-pill">0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"><a , , href="/Books/IndexByCategory?categoryId=4">Business</a>
                    <span class="badge badge-primary badge-pill">0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"><a , , href="/Books/IndexByCategory?categoryId=5">Arts</a>
                    <span class="badge badge-primary badge-pill">0</span>
                </li>
            </ul>
        </div>

    @endsection

