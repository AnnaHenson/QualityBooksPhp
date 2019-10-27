@extends('layouts.app')

@section('content')

    <h2>Create</h2>

    <h4>Category</h4>
    <hr />
    <div class="row">
        <div class="col-md-4">
            <form action="{{Route('save-category')}}" method="post">

                <div class="form-group">
                    <label class="control-label" for="Name">Name</label>
                    <input class="form-control" type="text" data-val="true" data-val-required="The Name field is required." id="Name" name="Name" value="" />
                    <span class="text-danger field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <input type="submit" value="Create" class="btn btn-primary" />
                </div>
                @csrf
        </div>
    </div>

    <div>
        <a href="{{Route('categories')}}">Back to List</a>
    </div>

@endsection
