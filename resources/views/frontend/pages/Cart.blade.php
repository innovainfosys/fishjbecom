@extends('frontend.layouts.Master')

@section('content')

<section>
    <div class="container">
        @if(isset($cart))
        <div class="row">
            <div class="col-md-12 bill-col-2">
                <div class="col-md-6 shipping-col-2">
                <div class="mb-5"><h1 class="bold">সওদা সমূহঃ</h1></div>

                <div class="row cart-table-title">
                    <div class="col-md-3">
                        <h4 class="text-center bold">পণ্যের ছবি</h4>
                    </div>
                    <div class="col-md-3">
                        <h4 class="text-center bold">পণ্যের নাম</h4>
                    </div>
                    <div class="col-md-3">
                        <h4 class="text-center bold">পণ্যের সংখ্যা</h4>
                    </div>
                    <div class="col-md-2">
                        <h4 class="text-center bold">সর্বমোট মূল্য</h4>
                    </div>
                </div>

                <div class="order-summary-wrapper">
                    @foreach($carts as $cart)
                  <div class="row">
                    <div class="col-md-3 justify-center cart-fish-image">
                      <img src="{{asset('uploads/images/products/'.$cart->product->featured_image)}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-3 middle justify-center cart-fish-title">
                      <div>
                        <div><p class="bangla-font bill-p-title mb-2 bold">{{$cart->product->title}}</p></div>
                        <div><p class="bangla-font2 bill-p-pieces">প্যাকেট ({{$cart->variation->weight}})</p></div>
                      </div>
                    </div>
                    <div class="col-3 middle justify-center cart-fish-quantity">

                        <div class="packet-pieces-wrap wrap">
                            <button type="button" id="sub" class="sub">-</button>
                            <input class="count" type="text" id="1" value="1" min="1" max="100" />
                            <button type="button" id="add" class="add">+</button>
                    </div>

                    </div>
                    <div class="col-md-2 middle text-center justify-center cart-fish-total-price">
                      <p class="bangla-font">{{$cart->variation->price}} <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p>
                    </div>
                    <div class="col-md-1 middle text-center justify-center cart-trash-btn cart-item-delete">
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </div>

                  </div>
                    @endforeach


                </div>

                <div class="total-count-div row mt-5">
                  <div class="col-md-10 item-titles"><p class="bold bangla-font">সর্বমোট আইটেমঃ</p></div>
                  <div class="col-md-2 items-number"><p class="bold bangla-font">{{$cart->sum('quantity')}}</p></div>
                </div>

                <div class="total-count-div row mt-5">
                  <div class="col-md-10 item-titles"><p class="bold bangla-font">সর্বমোট মূল্যঃ </p></div>
<<<<<<< HEAD
                  <div class="col-md-2 items-price"><p class="bold bangla-font">৬,০০০ <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p></div>
                  <div class="cart-button-wrapper ">
                    <span><button href="#" class="order-submit bangla-font mt-5">আরও শপিং করুন</button></span>
                    <span><button href="#" class="order-submit bangla-font mt-5">আপডেট</button></span>
                    <span><button href="#" class="order-submit bangla-font mt-5">চেকআউট পেজে যান</button></span>
                  </div>
=======
                    <?php
                    $subTotal = 0;
                    foreach ($carts as $cart)
                    {
                        $subTotal += $cart->variation->price * $cart->quantity;
                    }
                    ?>
                  <div class="col-md-2 items-price"><p class="bold bangla-font">{{$subTotal}} <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p></div>
                  <a href="{{route('checkoutPage')}}" class="btn btn-outline-success btn-sm order-submit bangla-font mt-5">চেকআউট পেজে যান</a>
>>>>>>> 1b6a8bc02f7ad919c8c0847eb185cc37b47ada68
                </div>

            </div>
        </div>
    </div>
        @else
            <div class="row">
                <div class="d-flex justify-content-center">
                <h2 class="text-danger">দয়া করে প্রডাক্ট এড করুন</h2>
                </div>
            </div>
        @endif
</section>

<script>

    // product quantity jquery code

    $('.add').click(function () {
    var th = $(this).closest('.wrap').find('.count');
    th.val(+th.val() + 1);
    });
    $('.sub').click(function () {
    var th = $(this).closest('.wrap').find('.count');
            if (th.val() > 1) th.val(+th.val() - 1);
    });
</script>

@endsection
