@extends('layouts.app')

@section('content')
    <div class="container body-content">


        <h2>Index</h2>

        <p>
            <a href="{{Route('create-category')}}">Create New</a>
        </p>
        <table class="table">
            <thead>
            <tr>
                <th>
                    Name
                </th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
            </tr>
            @endforeach
           </tbody>
        </table>

        <hr />
        <div>
        </div>
        <footer>
            <p>&copy; 2019 - QualityBooks</p>
        </footer>
    </div>
@endsection
