  @extends('frontend.master')

  @section('content')

 

 @include('frontend.components.navLayer')
 @include('frontend.components.hero')
 <livewire:trending-product/>
 @include('frontend.components.bannerOne')
 <livewire:latest-product/>
 @include('frontend.components.bannerTwo')
 @include('frontend.components.product')
 @include('frontend.components.banner')
 

@endsection
