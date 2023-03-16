@extends('frontend.layouts.Master')

@section('content')

<!-- fish list section start from here -->

<section class="fish-list-section">
    <div class="container">
        <div class="row">
            @foreach($homeBlock as $row)
            <h1 class="section-heading bangla-font">{{$row->title}}</h1>
                @foreach($row->allItems as $item)
                   <div class="col-md-6 fish-col">
                <div class="fish-div">
                    <div class="text-center">
                        <a href="{{route('Product.Single.View', $item->product->slug)}}">
                            <img src="{{asset('uploads/images/products/'.$item->product->featured_image)}}"  height="250" width="250" alt="">
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
                    </div>
                </div>
            </div>
                @endforeach
            @endforeach

    </div>
</section>

<!-- fish list section end from here -->

@endsection
