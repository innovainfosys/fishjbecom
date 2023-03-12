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

    <section class="fish-list-section">
        <div class="container">
            <div class="row">
                <h1 class="section-heading bangla-font">{{$fishTalikas->title}}</h1>
                @foreach($fishTalikas->items as $item)
                <div class="col-md-6 fish-col">
                    <div class="fish-div">
                        <div class="text-center">
                            <a href="{{route('Product.Single.View', $item->product->slug)}}">
                            <img src="{{asset('uploads/images/products/'.$item->product->featured_image)}}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="text-center fish-name-div">
                            <a href="{{route('Product.Single.View', $item->product->slug)}}">
                            <h5 class="fish-name bangla-font">{{$item->product->title}}</h5>
                            </a>
                        </div>
                        <div class="text-center">
                            <span class="span-btn weight bangla-font"><i class="fa-solid fa-scale-balanced"></i>   <i class="fa-solid fa-less-than"></i>
                                @if($item->product->getMinWeight() >= 1000)
                                    {{$item->product->getMinWeight()/1000}}kg
                                @else
                                    {{$item->product->getMinWeight()}}gm
                                 @endif
                                </span>
                            <span class="span-btn price bangla-font"><i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i> {{$item->product->getMinPrice()}}</span>
                            <span class="span-btn price poppins add-cart" data-toggle="modal" data-target="#exampleModal"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</a></span>

                            {{-- modal start here   --}}

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title bold" id="exampleModalLabel">প্যাকেট নির্বাচন করুন</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="modal-div-wrapper">
                                        <select name="" id="">
                                            <option value="">প্যাকেট নির্বাচন করুন</option>
                                            <option value="">২৫০ গ্রাম ৭০০৳</option>
                                            <option value="">৫০০ গ্রাম ১২০০৳</option>
                                            <option value="">০০০ গ্রাম ১৭০০৳</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-md btn-success">Done</button>
                                    <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                                </div>
                            </div>

                            {{-- modal end here   --}}

                        </div>
                    </div>
                </div>
                    @endforeach


                <div class="text-center"><button class="bangla-font cart-btn see-more-fish"><a href="#">আরও দেখুন</a><i class="cart fa-solid fa-fish-fins"></i></button></div>

            </div>
        </div>
        </div>
    </section>

    <!-- fish list section end from here -->

    <!-- 2 categories fish section code start from here -->

    <section class="fish-list-section">
        <div class="container">
            <div class="row">

                <div class="col-md-6 sea-fish-col river-fish-col">
                    <div class="row">
                        <div class="row">
                            <h1 class="section-heading bangla-font">{{$salWaterFishTalikas->title}}</h1>
                            @foreach($salWaterFishTalikas->items as $item)
                            <div class="col-md-6">
                                <div class="river-fish-div">
                                    <div class="text-center">
                                        <a href="{{route('Product.Single.View', $item->product->slug)}}">
                                        <img src="{{asset('uploads/images/products/'.$item->product->featured_image)}}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="text-center fish-name-div">
                                        <a href="{{route('Product.Single.View', $item->product->slug)}}">
                                            <h5 class="fish-name bangla-font">{{$item->product->title}}</h5>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <span class="span-btn weight bangla-font"><i class="fa-solid fa-scale-balanced"></i>
                                            @if($item->product->getMinWeight() >= 1000)
                                                {{$item->product->getMinWeight()/1000}}kg
                                            @else
                                                {{$item->product->getMinWeight()}}gm
                                            @endif </span>
                                        <span class="span-btn price bangla-font"><i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i> {{$item->product->getMinPrice()}}</span>
                                        <p class="span-btn price poppins river-add-cart"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="text-center"><button class="bangla-font cart-btn see-more-fish"><a href="#">আরও দেখুন</a><i class="cart fa-solid fa-fish-fins"></i></button></div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 river-fish-col-2  river-fish-col">
                    <div class="row">
                        <div class="row">
                            <h1 class="section-heading bangla-font">{{$sweetWaterFishTalikas->title}}</h1>
                            @foreach($sweetWaterFishTalikas->items as $item)
                            <div class="col-md-6">
                                <div class="river-fish-div">
                                    <div class="text-center">
                                        <a href="{{route('Product.Single.View', $item->product->slug)}}">
                                        <img src="{{asset('uploads/images/products/'.$item->product->featured_image)}}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="text-center fish-name-div">
                                        <a href="{{route('Product.Single.View', $item->product->slug)}}">
                                        <h5 class="fish-name bangla-font">{{$item->product->title}}</h5>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <span class="span-btn weight bangla-font"><i class="fa-solid fa-scale-balanced"></i>
                                            @if($item->product->getMinWeight() >= 1000)
                                                {{$item->product->getMinWeight()/1000}}kg
                                            @else
                                                {{$item->product->getMinWeight()}}gm
                                            @endif
                                            </span>
                                        <span class="span-btn price bangla-font"><i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i> ২,০০০</span>
                                        <p class="span-btn price poppins river-add-cart"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="text-center"><button class="bangla-font cart-btn see-more-fish"><a href="#">আরও দেখুন</a><i class="cart fa-solid fa-fish-fins"></i></button></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
