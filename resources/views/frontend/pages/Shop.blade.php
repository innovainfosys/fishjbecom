@extends('frontend.layouts.Master')

@section('content')

    <!-- fish list section start from here -->

    <section class="fish-list-section">
        <div class="container">
            <div class="row">
                    <h1 class="section-heading bangla-font"></h1>
                    @foreach($products as $product)
                        <div class="col-md-3 fish-col">
                            <div class="fish-div">
                                <div class="text-center">
                                    <a href="{{route('Product.Single.View', $product->slug)}}">
                                        <img src="{{asset('uploads/images/products/'.$product->featured_image)}}"  class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="text-center fish-name-div">
                                    <a href="{{route('Product.Single.View', $product->slug)}}">
                                        <h5 class="fish-name bangla-font">{{$product->title}}</h5>
                                    </a>
                                </div>
                                <div class="text-center">
                           <span class="span-btn weight bangla-font"><i class="fa-solid fa-scale-balanced"></i>   <i class="fa-solid fa-less-than"></i>
                                @if($product->getMinWeight() >= 1000)
                                   {{$product->getMinWeight()/1000}}kg
                               @else
                                   {{$product->getMinWeight()}}gm
                               @endif
                                </span>
                                    <span class="span-btn price bangla-font"><i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i> {{$product->getMinPrice()}}</span>
                                    <span class="span-btn price poppins add-cart" data-toggle="modal" data-target="#exampleModal"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</a></span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                <div class="d-flex justify-content-center">
                    {!! $products->links() !!}
                </div>


            </div>
    </section>

    <!-- fish list section end from here -->

@endsection
