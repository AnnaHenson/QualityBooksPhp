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

        <h2><span class="glyphicon glyphicon glyphicon-shopping-cart"></span></h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <h4 class="display-4">Book</h4>
                </div>
                <div class="col-sm-2">
                    <h4 class="display-4">Quantity</h4>
                </div>
                <div class="col-sm-2">
                    <h4 class="display-4">Price</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2"><a href="/Orders/Details/1">Color Therapy</a></div>
                <div class="col-sm-2">1 <a href="/ShoppingCart/RemoveFromCart/1"><span class="glyphicon glyphicon-remove-circle"></span></a></div>
                <div class="col-sm-2">$1.00</div>
            </div>
            <div class="row">
                <div class="col-sm-2"><a href="/Orders/Details/2">Art that changed the world</a></div>
                <div class="col-sm-2">1 <a href="/ShoppingCart/RemoveFromCart/2"><span class="glyphicon glyphicon-remove-circle"></span></a></div>
                <div class="col-sm-2">$20.00</div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">GrandTotal:</div>

                <div class="col-sm-2">$21.00</div>
            </div>
            <div class="row">
                <div class="col-sm-offset-4">
                    <a class="btn btn-primary" href="{{Route('store_order')}}">
                        Proceed to checkout <span class="glyphicon glyphicon-step-forward"></span>
                    </a>
                </div>

            </div>
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
