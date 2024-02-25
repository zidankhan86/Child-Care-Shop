@extends('backend.master')

@section('content')

<br><br><div class="container">
    <div class="mx-auto mt-4 mb-4">
        <h4 class="text-success text-center">FAQ Edit</h4>

        <form action="{{ route('faq.update',$edit->id) }}" method="post" enctype="multipart/form-data" class="mx-auto p-3" style="max-width: 600px;">
        @method('PUT')
            @csrf

            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif

            <div class="mb-3">
                <label for="exampleInputName2" class="form-label">QUESTION ?</label>
                <input type="text" name="question" value="{{ $edit->question }}" class="form-control" id="exampleInputName2" name="question" placeholder="How to buy ?..">
                @error('question')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputName2" class="form-label">ANSWER</label>
               <input type="text" value="{{ $edit->answer }}" class="form-control" name="answer" placeholder="Choose Product..">
                @error('answer')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>

                <br><div class="text-center">
                <button type="submit" class="btn btn-success">Update FAQ</button>
            </div>
        </form>
    </div>
</div>

@endsection
