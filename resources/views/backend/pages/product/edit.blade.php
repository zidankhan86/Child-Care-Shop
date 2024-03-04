@extends('backend.master')

@section('content')
<div class="container">
<div class="container">
<div class="container">


<br><h4 class="text-success text-center">Edit Product</h4>


<form action="{{route('product.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(session('success'))
        <p class="alert alert-success"> {{session('success')}}</p>
         @endif



        <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Product Name</label>
        <input type="text" class="form-control" value="{{$edit->name}}" id="exampleInputName1" name="name" placeholder="Product Name..">
        @error('name')

        <strong class="text-danger">{{$message}}</strong>

        @enderror

         </div>


         <div class="mb-3 mx-sm-2">
        <label for="exampleInputName1" class="form-label">Product stock</label>
        <input type="text" class="form-control" value="{{$edit->stock}}" id="exampleInputName1" name="product_stock" placeholder="Product Name..">
        @error('product_stock')

        <strong class="text-danger">{{$message}}</strong>

        @enderror

         </div>



         <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Select Category</label>

            <select name="category_id" id="" class="form-control">

                @foreach ($categories as $item)


                <option value="{{$item->id}}">{{$item->type}}</option>

                @endforeach


            </select>

             </div>

         <div class="mb-3 mx-sm-2">
            <label for="exampleInputName1" class="form-label">Product Image</label>
            <input type="file" class="form-control dropify" value="{{$edit->image}}" name="image" placeholder="Product Image..">
            @error('image')

            <strong class="text-danger">{{$message}}</strong>

            @enderror
             </div>
             <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Product Weight</label>
                <input type="number" class="form-control" step="0.01"  value="{{$edit->weight}}" id="exampleInputName1" name="weight" placeholder="0.5kg..">

                @error('weight')

                <strong class="text-danger">{{$message}}</strong>

                @enderror
                 </div>

        <div class="mb-3 mx-sm-2">
        <label for="exampleInputNumber2" class="form-label"> Stock</label>
        <input type="number" class="form-control"  value="{{$edit->stock}}" id="exampleInputNumber2" name="stock" placeholder="70..">
        @error('stock')

        <strong class="text-danger">{{$message}}</strong>

        @enderror
        </div>

        <div class="mb-3 mx-sm-2">
            <label for="exampleInputNumber" class="form-label">Product Price</label>
            <input type="number" class="form-control" id="exampleInputNumber"  value="{{$edit->price}}" name="price" placeholder="500..">

            @error('price')

            <strong class="text-danger">{{$message}}</strong>

            @enderror
            </div>

            <div class="mb-3 mx-sm-2">
                <label for="exampleInputNumber" class="form-label">Dicount Price</label>
                <input type="number" class="form-control" id="exampleInputNumber"  value="{{$edit->discount}}" name="discount" placeholder="25%..">

                @error('discount')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
                </div>

             <div class="mb-3 mx-sm-2">
            <label for="exampleInputNumber3" class="form-label">Shipping time</label>
            <input type="number" class="form-control" name="time"  value="{{$edit->time}}" placeholder="3 days in Dhaka..">
            @error('time')

                <strong class="text-danger">{{$message}}</strong>

                @enderror
             </div>

              <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Product Description</label>
                <input type="text" class="form-control" id="exampleInputName1"  name="description" value="{{$edit->description}}" placeholder="Write product description here.." style="height: 100px;">
                @error('description')

                <strong class="text-danger">{{$message}}</strong>

                @enderror

              </div>

              <div class="mb-3 mx-sm-2">
                <label for="exampleInputName1" class="form-label">Product Information</label>
                <textarea class="form-control" id="exampleInputName1" name="product_information"  placeholder="Write more details about your product  here.." style="height: 150px;"> {{$edit->product_information}}</textarea>
                @error('product_information')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
              </div>

              <div class="mb-3 mx-sm-2" >
                <label for="exampleInputNumber3" class="form-label">Status</label>

                <select name="status" id="" class="form-control">
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>
                </select>

                @error('status')

                    <strong class="text-danger">{{$message}}</strong>

                    @enderror
                 </div> <br> <br>



      <div class="text-center">
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>

  </form>

  </div>
  </div>
  </div>
  <script>
    $('.dropify').dropify({
    messages: {
        'default': 'Drag and drop a file here or click',
        'replace': 'Drag and drop or click to replace',
        'remove':  'Remove',
        'error':   'Ooops, something wrong happended.'
    }
    });
    </script>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Bootstrap Datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
$(document).ready(function(){
    $('#datepicker').datepicker({
        format: 'yyyy-mm-dd', // Set the format to match your database date format
        autoclose: true
    });
});
</script>

@endsection




