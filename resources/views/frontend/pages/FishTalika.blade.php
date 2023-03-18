<section class="fish-list-section">
        <div class="container">
            <div class="row">
                <h1 class="section-heading bangla-font">{{$fishTalikas->title}}</h1>
                @foreach($fishTalikas->items as $item)
                <div class="col-md-6 fish-col">
                    <div class="fish-div">
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
                            <span class="span-btn weight bangla-font"><i class="fa-solid fa-scale-balanced"></i>   <i class="fa-solid fa-less-than"></i>
                                @if($item->product->getMinWeight() >= 1000)
                                    {{$item->product->getMinWeight()/1000}}kg
                                @else
                                    {{$item->product->getMinWeight()}}gm
                                 @endif
                                </span>
                            <span class="span-btn price bangla-font"><i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i> {{$item->product->getMinPrice()}}</span>
                            <span
                                class="span-btn price poppins add-cart"
                                data-toggle="modal"
                                data-target="#exampleModal{{$item->id}}"
                            >
                                <a href="#"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</a>
                            </span>



                            {{-- modal start here   --}}

                            <!-- Modal -->
                            <div class="modal fade productModal" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                            {{-- modal end here   --}}

                        </div>
                    </div>
                </div>
                    @endforeach


                <div class="text-center"><button class="bangla-font cart-btn see-more-fish"><a href="{{route('All.Product')}}">আরও দেখুন</a><i class="cart fa-solid fa-fish-fins"></i></button></div>

            </div>
        </div>
        </div>
    </section>