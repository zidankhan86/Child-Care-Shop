  @extends('frontend.master')

  @section('content')

 

 @include('frontend.components.navLayer')
 @include('frontend.components.hero')
 @include('frontend.components.bannerOne')
 <livewire:latest-product/>
 @include('frontend.components.bannerTwo')
 @include('frontend.components.product')
 @include('frontend.components.banner')
 <livewire:trending-product/>

@endsection
