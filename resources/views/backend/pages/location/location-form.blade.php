@extends('backend.master')

@section('content')

<br><br><div class="container">
    <div class="mx-auto mt-4 mb-4">
        <h4 class="text-success text-center">Location Form</h4>

        <form action="{{ route('location.store') }}" method="POST" enctype="multipart/form-data" class="mx-auto p-3" style="max-width: 600px;">
            @csrf

            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif

            <div class="mb-3">
                <label for="exampleInputName2" class="form-label">Location</label>
                <input type="text" name="location" value="{{ old('location') }}" class="form-control" id="exampleInputName2" name="question" placeholder="Uttara..">
                @error('location')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>

            

                <br><div class="text-center">
                <button type="submit" class="btn btn-success">Create Location</button>
            </div>
        </form>
    </div>
</div>

@endsection
