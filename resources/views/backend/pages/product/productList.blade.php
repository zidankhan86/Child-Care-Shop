@extends('backend.master')

@section('content')

   <div class="card mb-4">
                            <div class="card-header">
                            <br><a class="btn btn-success float-end ml-2" href="{{ route('product.form') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</a><br>
                                <i class="fas fa-table me-1"></i>
                                Product Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">serial</th>
                                            <th scope="col">Image</th>
                                            <th scope="col"> Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Weight</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Dicount</th>
                                            <th scope="col">Shipping</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @php
            $id = 1;
        @endphp
        @foreach ($products as $item)

      <tr>



        <th scope="row">{{ $id++}}</th>
        <td><img height="100px" width="100px" src="{{url('/public/uploads/'.$item->image)}}" alt=""></td>
        <td>{{ $item->name}}</td>
        <td>{{ $item->ProductCategory->type}}</td>
        <td>{{ $item->weight}} Kg</td>
        <td>{{ $item->stock}}</td>
        <td>{{ $item->price}} Tk.</td>
        <td>{{ $item->discount}}.00%</td>
        <td>{{ $item->time}}</td>
        <td>{{ $item->status == 1 ? 'Active' : ($item->status == 2 ? 'Trending' : 'Inactive') }}</td>

        <td>
            <a href="{{route('product.edit',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>


            
        
            <a class="btn btn-warning" href="{{ route('trending.status', ['id' => $item->id]) }}">
                <i class="fas fa-arrow-up"></i>
                </a>
            

            <a href="{{route('product.delete',$item->id)}}" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><i class="fas fa-trash"></i></a>

            <a href="{{route('active.status',$item->id)}}" class="btn btn-info" onclick="return confirm('Do you want to make it active ?')">Active</a>

            <a href="{{route('inactive.status',$item->id)}}" class="btn btn-warning" onclick="return confirm('Do you want to make it Inactive ?')">Inactive</a>
           

        </td>

      </tr>
      @endforeach
                                        
                                       
                                        
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>

@endsection


