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
                                        <img src="{{asset('uploads/images/products/'.$item->product->featured_image)}}" height="250" width="250" alt="">
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
                                        <p class="span-btn price poppins river-add-cart" data-toggle="modal" data-target="#exampleModal{{$item->id}}"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</a></p>

                                        <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                @foreach($item->product->variations as $variation)
                                                                    <option value="{{$variation->id}}"> {{$variation->weight}} gm {{$variation->price}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-md btn-success cartBtn"  data-productid="{{$item->id}}" >Done</button>
                                                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="text-center"><button class="bangla-font cart-btn see-more-fish"><a href="{{route('Product.BlockWise.Show',$salWaterFishTalikas->slug)}}">আরও দেখুন</a><i class="cart fa-solid fa-fish-fins"></i></button></div>

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
                                        <img src="{{asset('uploads/images/products/'.$item->product->featured_image)}}" height="250" width="250" alt="">
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
                                        <p class="span-btn price poppins river-add-cart" data-toggle="modal" data-target="#exampleModal{{$item->id}}"><a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</a></p>
                                        <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <input type="hidden" class="product_id" name="product_id" value="{{$item->product->id}}">
                                                            <label >প্যাকেট নির্বাচন করুন</label>
                                                            <select name="variation_id" id="variation_id_{{$item->id}}" class="variationOptionSelector">
                                                                @foreach($item->product->variations as $variation)
                                                                    <option value="{{$variation->id}}"> {{$variation->weight}} gm {{$variation->price}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-md btn-success cartBtn" data-productid="{{$item->id}}">Done</button>
                                                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="text-center"><button class="bangla-font cart-btn see-more-fish"><a href="{{route('Product.BlockWise.Show',$sweetWaterFishTalikas->slug)}}">আরও দেখুন</a><i class="cart fa-solid fa-fish-fins"></i></button></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
