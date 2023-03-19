@extends('frontend.layouts.Master')

@section('content')
    <section>
        <div class="owl-carousel owl-theme">
            <div class="home-slide item"><img src="{{asset('frontend/assets/images/fish-2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="home-slide item"><img src="{{asset('frontend/assets/images/fish-2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="home-slide item"><img src="{{asset('frontend/assets/images/fish-2.jpg')}}" class="img-fluid" alt=""></div>
        </div>
    </section>

    <!-- slider section code start from here  -->

    <!-- fish list section start from here -->

   @include('frontend.pages.FishTalika')

    <!-- fish list section end from here -->

    <!-- 2 categories fish section code start from here -->

   @include('frontend.pages.CategoryProduct');

    @include('frontend.includes.Footer')
@endsection

@section('scripts')

@endsection
