@extends('layouts.app')

@section('content')

        <h2>Create</h2>

        <h4>Supplier</h4>
        <hr />
        <div class="row">
            <div class="col-md-4">
                <form action="{{Route('save-supplier')}}" method="post">

                    <div class="form-group">
                        <label class="control-label" for="SupplierName">Supplier Name</label>
                        <input class="form-control" type="text" data-val="true" data-val-length="The field Supplier Name must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="The Supplier Name field is required." id="SupplierName" name="SupplierName" value="" />
                        <span class="text-danger field-validation-valid" data-valmsg-for="SupplierName" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="HomeNumber">Home Number</label>
                        <input class="form-control" type="tel" id="HomeNumber" name="HomeNumber" value="" />
                        <span class="text-danger field-validation-valid" data-valmsg-for="HomeNumber" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="WorkNumber">Work Number</label>
                        <input class="form-control" type="tel" id="WorkNumber" name="WorkNumber" value="" />
                        <span class="text-danger field-validation-valid" data-valmsg-for="WorkNumber" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="MobileNumber">Mobile Number</label>
                        <input class="form-control" type="tel" id="MobileNumber" name="MobileNumber" value="" />
                        <span class="text-danger field-validation-valid" data-valmsg-for="MobileNumber" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Email">Email</label>
                        <input class="form-control" type="email" id="Email" name="Email" value="" data-val-required="The Email field is required." data-val="true"/>
                        <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create" class="btn btn-default" />
                    </div>
                    @csrf
            </div>
        </div>

        <div>
            <a href="{{Route('suppliers')}}">Back to List</a>
        </div>

@endsection
