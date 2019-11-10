@extends('layouts.app')

@section('content')
    <h2>Create</h2>

    <h4>Book</h4>
    <hr />
    <div class="row">
        <div class="col-md-4">
            <form enctype="multipart/form-data" action="{{route('create-book-post')}}" method="post">
                @csrf
                <div class="form-group">
                    <label class="control-label" for="Title">Title</label>
                    <input class="form-control" type="text" data-val="true" data-val-length="The field Title must be a string with a maximum length of 150." data-val-length-max="150" data-val-required="The Title field is required." id="Title" name="Title" value="" />
                    <span class="text-danger field-validation-valid" data-valmsg-for="Title" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="Description">Description</label>
                    <textarea class="form-control" id="Description" name="Description">
</textarea>
                    <span class="text-danger field-validation-valid" data-valmsg-for="Description" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="Supplier">Supplier</label>
                    <select class="form-control" data-val="true" data-val-required="The SupplierId field is required." id="SupplierId" name="SupplierId">
                        <option value=""> -- Select Supplier -- </option>
                        @foreach($suppliers as $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->supplier_name}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger field-validation-valid" data-valmsg-for="Supplier" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="Category">Category</label>
                    <select class="form-control" data-val="true" data-val-required="The CategoryId field is required." id="CategoryId" name="CategoryId">
                        <option value=""> -- Select Category -- </option>
                        @foreach($categories as $category)
                            @if($category->id == 1)
                                <option value="{{$category->id}}" selected="selected">{{$category->name}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                    </select>
                    <span class="text-danger field-validation-valid" data-valmsg-for="Category" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="Price">Price</label>
                    <input class="form-control" type="text" data-val="true" data-val-number="The field Price must be a number." data-val-range="The field Price must be between 0 and 200." data-val-range-max="200" data-val-range-min="0" data-val-required="The Price field is required." id="Price" name="Price" value="" />
                    <span class="text-danger field-validation-valid" data-valmsg-for="Price" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <label class="control-label" for="BookImage">BookImage</label>
                    <input class="form-control" type="file" id="BookImage" name="BookImage" accept="image/png, image/jpeg"/>
                    <span class="text-danger field-validation-valid" data-valmsg-for="BookImage" data-valmsg-replace="true"></span>
                </div>
                <div class="form-group">
                    <input type="submit" value="Create" class="btn btn-default btn btn-primary" />
                </div>

        </div>
    </div>

    <div>
        <a href="{{route('books')}}">Back to List</a>
    </div>

@endsection
