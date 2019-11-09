@extends('layouts.app')

@section('content')


<div style=""></div>
<h2>Books</h2>

@if(Session::has('success'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif

@auth
    @if(Auth::user()->is_admin)
    <a href="{{route('create-book')}}">Add Book</a>
    @endif
@endauth
<form action="{{Route('books')}}" method="get">
    <div class="form-actions no-color">
        <p>
            Find by name or price <input type="text" name="searchString"  value=""/>
            <input type="submit" value="Search" class="btn btn-info"/>
            <a href="{{Route('books')}}">Back to full list</a>
        </p>
    </div>
</form>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($books as $book)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <img width="200px" src="{{ asset($book->file_name)}}"/>
                                    <p class="card-text lead">{{$book->title}}</p>
                                    <p class="card-text lead">{{$book->description}}</p>
                                    <small class="text-muted">{{$book->price}}</small>
                                    <div style="margin-top: 10px">
                                        <a href="{{Route('add_to_cart', ['id' => $book->id])}}"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @if (isset($search))
                {{$books->appends(['searchString' => $search])->links()}}
            @elseif (isset($categoryId))
                {{$books->appends(['categoryId' => $categoryId])->links()}}
            @else
                {{$books->links()}}
            @endif
            <div>
                <a href="{{Route('view_cart')}}">Go to cart</a>
            </div>
        </div>


@endsection
