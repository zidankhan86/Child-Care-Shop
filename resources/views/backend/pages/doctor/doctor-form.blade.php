@extends('backend.master')

@section('content')

<div class="container mt-4">
    <div class="container">
        <h4 class="text-success text-center">Doctor</h4>

        <form action="{{ route('doctor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
            @endif

            <div class="row mt-4">
                <div class="mb-3 col-md-6">
                    <label for="exampleInputName1" class="form-label">Name</label>
                    <input type="text" class="form-control" value="{{ old('name') }}" id="exampleInputName1" name="name" placeholder="Enter name...">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label for="exampleInputDetails" class="form-label">Details</label>
                    <textarea class="form-control" id="exampleInputDetails" name="details" placeholder="Enter details...">{{ old('details') }}</textarea>
                    @error('details')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleInputPhone" value="{{ old('phone') }}" name="phone" placeholder="Enter phone...">
                    @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputDegree" class="form-label">Degree</label>
                    <input type="text" class="form-control" id="exampleInputDegree" value="{{ old('degree') }}" name="degree" placeholder="Enter degree...">
                    @error('degree')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>


            <div class="mb-3 mx-sm-2">
                <label for="exampleInputImage" class="form-label">Image <strong>*(IMAGE SIZE MAX 200kb)*</strong></label>
                <input type="file" class="form-control dropify" name="image" placeholder="Product Image...">
                @error('image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 mx-sm-2">
                <label for="exampleInputLocation" class="form-label">Location</label>
                <select name="location_id" id="exampleInputLocation" class="form-control">
                    <option value="">Select a location...</option>
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->location }}</option>
                    @endforeach
                </select>
                @error('location_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Create Doctor</button>
            </div>

        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#exampleInputDetails'))
        .catch(error => {
            console.error(error);
        });
</script>

<style>
    #container {
        width: 1000px;
        margin: 20px auto;
    }

    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 100px;
        width: 100%; /* Set width to 100% */
    }

    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin: 20px auto;
    }
</style>


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
@endsection
