@extends('frontend.master')

  @section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="hero__search">
                <div class="hero__search__form">
                    <form action="{{ route('doctor.search') }}">
                        @csrf
                        <input type="text" name="search_key" class="form-control" placeholder="What do you need?">
                        <button type="submit" class="btn btn-dark">SEARCH</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

   <!-- content -->
      <div class="col-lg-12">
@foreach ($doctor as $doctor)
        <div class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="{{url('/public/uploads',$doctor->image)}}" class="w-100" />
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>

    

                  <div class="col-xl-6 col-md-5 col-sm-7">
                    <h5>{{$doctor->name}}</h5>
                    <div class="d-flex flex-row">
                      <div class="text-warning mb-1 me-2">
                     
                        <span class="ms-1">
                         {{$doctor->degree}}
                        </span>
                      </div>
                      
                    </div>

                    <p class="text mb-4 mb-md-0">
                     {!!$doctor->details!!}
                    </p>
                    <p class="text mb-4 mb-md-0">
                    {{ $doctor->locations->location }}

                    </p>
                    <b>Call: {{ $doctor->phone }}</b>
                  </div>
                  

                </div>
              </div>
            </div>
          </div>
        </div>
 @endforeach   

        <hr />

       
      </div>
</div>
</div>
<br>


<style>
.icon-hover:hover {
  border-color: #3b71ca !important;
  background-color: white !important;
}

.icon-hover:hover i {
  color: #3b71ca !important;
}
</style>


@endsection
