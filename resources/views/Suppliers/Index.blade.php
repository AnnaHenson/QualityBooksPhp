@extends('layouts.app')

@section('content')



        <h2>Index</h2>

        <p>
            <a href="{{Route('create-supplier')}}">Create New</a>
        </p>
        <table class="table">
            <thead>
            <tr>
                <th>
                    Supplier Name
                </th>
                <th>
                    Home Number
                </th>
                <th>
                    Work Number
                </th>
                <th>
                    Mobile Number
                </th>
                <th>
                    Email
                </th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($suppliers as $supplier)
            <tr>
                <td>
                    {{$supplier->supplier_name}}
                </td>
                <td>
                    {{$supplier->home_number}}
                </td>
                <td>
                    {{$supplier->work_number}}
                </td>
                <td>
                    {{$supplier->mobile_number}}
                </td>
                <td>
                    <a href="mailto:{{$supplier->email}}">{{$supplier->email}}</a>
                </td>
                <td>

                </td>
            </tr>
                @endforeach
            </tbody>
        </table>

@endsection
