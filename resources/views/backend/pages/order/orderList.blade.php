@extends('backend.master')

@section('content')
<div class="container">
        <div class="container">
            <div class="container">
<br>
<h4 class="text-success text-center">Order List</h4>
<br>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Name</th>
            <th scope="col">Amount</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">City</th>
            <th scope="col">Address</th>
            <th scope="col">Postcode</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            
        </tr>
    </thead>
    <tbody>
        @php
        $id = 1;
        @endphp

        @foreach ($orders as $item)
        <tr>
            <th scope="row">{{ $id++ }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->amount }} Tk.</td>
            <td>{{ $item->first_name }}</td>
            <td>{{ $item->last_name }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->city }}</td>
            <td>{{ $item->postcode }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->status }}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

</div>

@endsection
