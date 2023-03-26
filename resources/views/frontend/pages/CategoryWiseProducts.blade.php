@extends('frontend.layouts.Master')

@section('content')

<!-- fish list section start from here -->

<section class="fish-list-section">
    <div class="container">
        <div class="row">
            <h1 class="section-heading bangla-font"></h1>
                @foreach($products as $item)
                <div class="col-md-3">
                    <div class="river-fish-div">
                    <div class="text-center">
                        <a href="{{route('Product.Single.View', $item->slug)}}">
                            <img src="{{asset('uploads/images/products/'.$item->featured_image)}}"  height="250" width="250" alt="">
                        </a>
                    </div>
                    <div class="text-center fish-name-div">
                        <a href="{{route('Product.Single.View', $item->slug)}}">
                        <h5 class="fish-name bangla-font">{{$item->title}}</h5>
                        </a>
                    </div>
                    <div class="text-center">
                           <span class="span-btn weight bangla-font"><i class="fa-solid fa-scale-balanced"></i>   <i class="fa-solid fa-less-than"></i>
                                @if($item->getMinWeight() >= 1000)
                                   {{$item->getMinWeight()/1000}}kg
                               @else
                                   {{$item->getMinWeight()}}gm
                               @endif
                                </span>
                        <span class="span-btn price bangla-font"><i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i> {{$item->getMinPrice()}}</span>
                        <p class="span-btn price poppins add-cart river-add-cart " data-toggle="modal" data-target="#exampleModal{{$item->id}}"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</a></p>
                        <div class="modal productModal" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <label >প্যাকেট নির্বাচন করুন</label>
                                            <select name="variation_id" id="variation_id_{{$item->id}}" class="variationOptionSelector">
                                                @foreach($item->variations as $variation)
                                                    <option  value="{{$variation->id}}"> @if($variation->weight >= 1000){{$variation->weight/1000}} Kg @else{{$variation->weight}} gm @endif {{$variation->price}} Taka</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="sumbit" class="btn btn-md btn-success cartBtn" data-productid="{{$item->id}}">Confirm</button>
                                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>

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
