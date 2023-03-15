
  @extends('frontend.layouts.Master')

@section('content')
    <section class="checkout-section">
        <div class="container">
            <div class="row">

                <div class="col-md-6 bill-col-1">
                    <div class="shipping-col-1">
                      <div class="mb-5"><h1 class="bold">প্রেরণের ঠিকানাঃ</h1></div>
                      <div class="first-name mb-4"><label>পূর্ণনাম</label><input type="text" required="required" placeholder="আবশ্যিক" name="" id=""></div>
                      <div class="number mb-4"><label>মোবাইল</label><input type="number" required="required" placeholder="আবশ্যিক" name="" id=""></div>
                      <div class="address mb-4"><label>ঠিকানা</label><input type="text" required="required" placeholder="আবশ্যিক" name="" id=""></div>
                      <div class="email mb-4"><label>ইমেইল</label><input type="email"  placeholder="বাধ্যতামূলক নয়" name="" id=""></div>
                    </div>
                    <div class="shipping-col-1 mt-5 desktop-payment">
                      <div class="mb-5"><h1 class="bold">পেমেন্টঃ</h1></div>
                      <div class="payment-box">
                        <span class="checkbox-spacing"><input class="form-check-input" type="checkbox" value="" id="bkash"></span><span class="bangla-font vertical-center">বিকাশ <img src="{{asset('frontend/assets/svg/bkash.svg')}}" class="bkash-img" alt=""></span>
                      </div>
                      <div class="payment-box">
                        <span class="checkbox-spacing"><input class="form-check-input" type="checkbox" value="" id="bkash"></span><span class="bangla-font vertical-center">নগদ <img src="{{asset('frontend/assets/svg/nagad.svg')}}" class="bkash-img" alt=""></span>
                      </div>
                      <div class="payment-box">
                        <span class="checkbox-spacing"><input class="form-check-input" type="checkbox" value="" id="bkash"></span><span class="bangla-font vertical-center">ভিসা কার্ড/মাস্টার কার্ড <img src="{{asset('frontend/assets/svg/visa.svg')}}" class="bkash-img" alt=""><img src="{{asset('frontend/assets/svg/master.svg')}}" class="bkash-img" alt=""></span>
                      </div>
                    </div>
                </div>

                <div class="col-md-6 bill-col-2">
                    <div class="col-md-6 shipping-col-2">
                    <div class="mb-5"><h1 class="bold">সওদা সমূহঃ</h1></div>
                    <div class="order-summary-wrapper">

                      <div class="row">
                        <div class="col-md-2">
                          <img src="{{asset('frontend/assets/images/b4.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8 middle">
                          <div>
                            <div><p class="bangla-font bill-p-title mb-2 bold">কাতল মাছ</p></div>
                            <div><p class="bangla-font2 bill-p-pieces">প্যাকেট (৫০০) x ২</p></div>
                          </div>
                        </div>
                        <div class="col-md-2 middle text-center">
                          <p class="bangla-font">১,০০০ <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2">
                          <img src="{{asset('frontend/assets/images/b4.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8 middle">
                          <div>
                            <div><p class="bangla-font bill-p-title mb-2 bold">কাতল মাছ</p></div>
                            <div><p class="bangla-font2 bill-p-pieces">প্যাকেট (৫০০) x ২</p></div>
                          </div>
                        </div>
                        <div class="col-md-2 middle text-center">
                          <p class="bangla-font">১,০০০ <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2">
                          <img src="{{asset('frontend/assets/images/b4.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8 middle">
                          <div>
                            <div><p class="bangla-font bill-p-title mb-2 bold">কাতল মাছ</p></div>
                            <div><p class="bangla-font2 bill-p-pieces">প্যাকেট (৫০০) x ২</p></div>
                          </div>
                        </div>
                        <div class="col-md-2 middle text-center">
                          <p class="bangla-font">১,০০০ <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2">
                          <img src="{{asset('frontend/assets/images/b4.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8 middle">
                          <div>
                            <div><p class="bangla-font bill-p-title mb-2 bold">কাতল মাছ</p></div>
                            <div><p class="bangla-font2 bill-p-pieces">প্যাকেট (৫০০) x ২</p></div>
                          </div>
                        </div>
                        <div class="col-md-2 middle text-center">
                          <p class="bangla-font">১,০০০ <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2">
                          <img src="{{asset('frontend/assets/images/b4.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8 middle">
                          <div>
                            <div><p class="bangla-font bill-p-title mb-2 bold">কাতল মাছ</p></div>
                            <div><p class="bangla-font2 bill-p-pieces">প্যাকেট (৫০০) x ২</p></div>
                          </div>
                        </div>
                        <div class="col-md-2 middle text-center">
                          <p class="bangla-font">১,০০০ <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-2">
                          <img src="{{asset('frontend/assets/images/b4.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8 middle">
                          <div>
                            <div><p class="bangla-font bill-p-title mb-2 bold">কাতল মাছ</p></div>
                            <div><p class="bangla-font2 bill-p-pieces">প্যাকেট (৫০০) x ২</p></div>
                          </div>
                        </div>
                        <div class="col-md-2 middle text-center">
                          <p class="bangla-font">১,০০০ <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p>
                        </div>
                      </div>

                    </div>

                    <div class="total-count-div row mt-5">
                      <div class="col-md-10 item-titles"><p class="bold bangla-font">সর্বমোট আইটেমঃ</p></div>
                      <div class="col-md-2 items-number"><p class="bold bangla-font">১০টি</p></div>
                    </div>

                    <div class="total-count-div row mt-5">
                      <div class="col-md-10 item-titles"><p class="bold bangla-font">সর্বমোট মূল্যঃ </p></div>
                      <div class="col-md-2 items-price"><p class="bold bangla-font">৬,০০০ <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p></div>
                      <button href="#" class="order-submit bangla-font mt-5">অর্ডার কনফার্ম করুন</button>
                    </div>

                </div>
                </div>

            </div>
        </div>

        <div class="shipping-col-1 mt-5 mb-5 mobile-payment">
          <div class="mb-5"><h1 class="bold">পেমেন্টঃ</h1></div>
          <div class="payment-box">
            <span class="checkbox-spacing"><input class="form-check-input" type="checkbox" value="" id="bkash"></span><span class="bangla-font vertical-center">বিকাশ <img src="{{asset('frontend/assets/svg/bkash.svg')}}" class="bkash-img" alt=""></span>
          </div>
          <div class="payment-box">
            <span class="checkbox-spacing"><input class="form-check-input" type="checkbox" value="" id="bkash"></span><span class="bangla-font vertical-center">নগদ <img src="{{asset('frontend/assets/svg/nagad.svg')}}" class="bkash-img" alt=""></span>
          </div>
          <div class="payment-box">
            <span class="checkbox-spacing"><input class="form-check-input" type="checkbox" value="" id="bkash"></span><span class="bangla-font vertical-center">ভিসা কার্ড/মাস্টার কার্ড <img src="{{asset('frontend/assets/svg/visa.svg')}}" class="bkash-img" alt=""><img src="{{asset('frontend/assets/svg/master.svg')}}" class="bkash-img" alt=""></span>
          </div>
        </div>

    </section>


@endsection()
