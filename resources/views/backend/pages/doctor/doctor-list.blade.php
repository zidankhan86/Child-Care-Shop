@extends('backend.master')

@section('content')

<div class="container">
        <div class="container">
            <div class="container">
                 <div class="container">
                    <div class="container">
                         <div class="container">
                        <div>
                        <br><a class="btn btn-success float-end ml-2" href="{{ route('doctor.create') }}"><i class="fa-solid fa-plus"></i> Add Doctor</a>
                        <br><h4 class="text-success text-center">Doctor List</h4><br>
                        </div>

                       <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">serial</th>
                            <th scope="col">Type Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $serial =1;
                            @endphp

                            @foreach ($doctor as $item)
                        <tr>
                            <th scope="row">{{ $serial++}}</th>
                            <td>{{ $item->name}}</td>
                            <td> <img height="50" width="50" src="{{url('/public/uploads/',$item->image)}}" alt=""> </td>
                            <td>
                                
                            <form id="delete-form-{{$item->id}}" action="{{ route('doctor.destroy', $item->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a href="#" class="btn btn-danger" onclick="event.preventDefault(); if(confirm('Do you want to delete?')) { document.getElementById('delete-form-{{$item->id}}').submit(); }">
                                <i class="fas fa-trash"></i>
                            </a>
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
</div>
@endsection


