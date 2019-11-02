@extends('layouts.app')

@section('content')


    <h3>Please fill in the order Details</h3>
    <form action="{{Route('store_order')}}" method="post">
        <div class="form-horizontal">
            <hr/>


            <div class="form-group">
                <label class="col-md-2 control-label" for="FirstName">First Name</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" id="FirstName" name="FirstName" value="" />
                    <span class="text-danger field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="LastName">Last Name</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" id="LastName" name="LastName" value="" />
                    <span class="text-danger field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="City">City</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" id="City" name="City" value="" />
                    <span class="text-danger field-validation-valid" data-valmsg-for="City" data-valmsg-replace="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="PostalCode">Postal Code</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" id="PostalCode" name="PostalCode" value="" />
                    <span class="text-danger field-validation-valid" data-valmsg-for="PostalCode" data-valmsg-replace="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="Country">Country</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" id="Country" name="Country" value="" />
                    <span class="text-danger field-validation-valid" data-valmsg-for="Country" data-valmsg-replace="true"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="Phone">Phone</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" id="Phone" name="Phone" value="" />
                    <span class="text-danger field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-3 col-md-10">
                    <button type="submit" value="Create" class="btn btn-primary btn-lg">
                        Place Order <span class="glyphicon glyphicon-fast-forward"></span>
                    </button>
                </div>
            </div>
        </div>
        @csrf


    <hr />
    <div>
        @if(session('cart'))

                <h2><span class="glyphicon glyphicon glyphicon-shopping-cart"></span></h2>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <h4>Book</h4>
                        </div>
                        <div class="col-sm-2">
                            <h4>Quantity</h4>
                        </div>
                        <div class="col-sm-2">
                            <h4>Price</h4>
                        </div>
                    </div>
                 @foreach(session('cart') as $id => $details)
                    <div class="row">
                        <div class="col-sm-2">{{$details['name']}}</div>
                        <div class="col-sm-2">{{$details['quantity']}} <span class="glyphicon glyphicon-remove-circle"></span></div>
                        <div class="col-sm-2">{{$details['price']}}</div>
                    </div>
                @endforeach
            @endif
                    <br />


            <div class="row">
                <div class="col-sm-offset-4">
                    <a class="btn btn-danger" href="{{Route('books')}}">
                        Continue Shopping
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
