@extends('backend.master')

@section('content')

<br><br><div class="container">
    <div class="mx-auto mt-4 mb-4">
        <h4 class="text-success text-center">FAQ Form</h4>

        <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data" class="mx-auto p-3" style="max-width: 600px;">
            @csrf

            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif

            <div class="mb-3">
                <label for="exampleInputName2" class="form-label">QUESTION ?</label>
                <input type="text" name="question" value="{{ old('question') }}" class="form-control" id="exampleInputName2" name="question" placeholder="How to buy ?..">
                @error('question')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputName2" class="form-label">ANSWER</label>
               <input type="text" value="{{ old('answer') }}" class="form-control" name="answer" placeholder="Choose Product..">
                @error('answer')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>

                <br><div class="text-center">
                <button type="submit" class="btn btn-success">Create FAQ</button>
            </div>
        </form>
    </div>
</div>

@endsection
