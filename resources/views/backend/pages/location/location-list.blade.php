@extends('backend.master')

@section('content')

<div class="container">
        <div class="container">
            <div class="container">
                 <div class="container">
                    <div class="container">
                         <div class="container">
                        <div>
                        <br><a class="btn btn-success float-end ml-2" href="{{ route('location.index') }}"><i class="fa-solid fa-plus"></i> Add FAQ</a>
                        <br><h4 class="text-success text-center">FAQ List</h4><br>
                        </div>

                       <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">serial</th>
                            <th scope="col">Location</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $serial =1;
                            @endphp

                            @foreach ($edit as $item)
                        <tr>
                            <th scope="row">{{ $serial++}}</th>
                            <td>{{ $item->location}}</td>
                            <td>
                                <a href="{{route('faq.edit',$item->id)}}" class="btn btn-success"> <i class="fas fa-edit"></i></a>
                               <form id="delete-form-{{$item->id}}" action="{{ route('faq.destroy', $item->id) }}" method="POST" style="display: none;">
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


