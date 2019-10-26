@extends('layouts.app')

@section('content')

    <div class="container">
<div style=""></div>
<h2>Books</h2>

<a href="{{route('create-book')}}">Add Book</a>
<form asp-action="Index" method="get">
    <div class="form-actions no-color">
        <p>
            Find by name or price <input type="text" name="searchString"  value=""/>
            <input type="submit" value="Search" class="btn btn-default"/>
            <a>Back to full list</a>
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
                                    <p class="card-text lead">{{$book->title}}</p>
                                    <p class="card-text lead">{{$book->description}}</p>
                                    <small class="text-muted">{{$book->price}}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
