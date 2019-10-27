@extends('layouts.app')

@section('content')

    <h2>Orders</h2>


    <table class="table">
        <thead>
        <tr>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
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
        @foreach($orders as $order)
            <tr>
                <td>
                    {{$order->first_name}}
                </td>
                <td>
                    {{$order->last_name}}
                </td>
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
                <td>
                    @if($order->status == 0)
                        <a href="{{Route('set_status', ['id' => $order->id])}}">Waiting</a>
                    @else
                    Shipped
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
