@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                        <div >
                            <form action="{{Route('update-profile')}}" method="post" >
                                @csrf
                                <div class="form-group">
                                    <label class="control-label" for="Name">Name</label>
                                    <input class="form-control" type="text" data-val="true" data-val-length="The field Name must be a string with a maximum length of 191." data-val-length-max="191" data-val-required="The Name field is required." id="Name" name="Name" value="{{$user->name}}" />
                                    <span class="text-danger field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="Email">E-Mail Address</label>
                                    <input class="form-control" type="text" data-val="true" data-val-length="The field E-Mail Address must be a string with a maximum length of 191." data-val-length-max="150" data-val-required="The E-Mail Address field is required." id="Email" name="Email" value="{{$user->email}}" />
                                    <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="Address">Address</label>
                                    <input class="form-control" type="text" data-val="true" data-val-length="The field Address must be a string with a maximum length of 1000." data-val-length-max="1000" data-val-required="The Address field is required." id="Address" name="Address" value="{{$user->address}}" />
                                    <span class="text-danger field-validation-valid" data-valmsg-for="Address" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="HomePhone">Home Phone</label>
                                    <input class="form-control" type="text" data-val="true" data-val-length="The field Home Phone must be a string with a maximum length of 50." data-val-length-max="50"  id="HomePhone" name="HomePhone" value="{{$user->home_phone}}" />
                                    <span class="text-danger field-validation-valid" data-valmsg-for="HomePhone" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="WorkPhone">Work Phone</label>
                                    <input class="form-control" type="text" data-val="true" data-val-length="The field Work Phone must be a string with a maximum length of 50." data-val-length-max="50"  id="WorkPhone" name="WorkPhone" value="{{$user->work_phone}}" />
                                    <span class="text-danger field-validation-valid" data-valmsg-for="WorkPhone" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="Mobile">Mobile Phone</label>
                                    <input class="form-control" type="text" data-val="true" data-val-length="The field Mobile Phone must be a string with a maximum length of 50." data-val-length-max="50"  id="MobilePhone" name="MobilePhone" value="{{$user->mobile_phone}}" />
                                    <span class="text-danger field-validation-valid" data-valmsg-for="MobilePhone" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update" class="btn btn-default btn btn-primary" disabled="disabled" />
                                </div>

                            </form>
                        </div>
                    <h4>Orders</h4>
                    <table class="table">
                        <thead>
                        <tr>

                            <th>
                                City
                            </th>
                            <th>
                                Postal Code
                            </th>
                            <th>
                                Country
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Total
                            </th>
                            <th>
                                Order Date
                            </th>
                            <th>
                                GST
                            </th>
                            <th>
                                Grand Total
                            </th>
                            <th>
                                Status
                            </th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($user->orders()->get() as $order)
                        <tr>
                            <td>
                                {{$order->city}}
                            </td>
                            <td>
                                {{$order->postal_code}}
                            </td>
                            <td>
                                {{$order->country}}
                            </td>
                            <td>
                                {{$order->phone}}
                            </td>
                            <td>
                                {{$order->total}}
                            </td>
                            <td>
                                {{$order->order_date}}
                            </td>
                            <td>
                                {{$order->gst}}
                            </td>
                            <td>
                                {{$order->grand_total}}
                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
