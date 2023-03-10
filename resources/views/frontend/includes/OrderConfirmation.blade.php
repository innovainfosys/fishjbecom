@extends('frontend.layouts.Master')

@section('content')
<section id="printedSection" class="order-confirm-sec">
    <div class="container order-confirmation-container">
        <div class="row">
            <div class="col-md-12">
                <div class="justify-center mb-5">
                    <img src="{{asset('frontend/assets/logos/logo.png')}}" class="img-fluid" alt="">
                </div>
                <div class="first-sec">
                    <h3 class="mb-4 bold oc-titles">আপনার অর্ডারটি নিশ্চিত করা হয়েছে!</h3>
                    <p class="first-sub">প্রিয় মিদুল,</br> আপনার অর্ডারটি নিশ্চিত করা হয়েছে এবং শীঘ্রই শিপিং করা হবে
                    </p>
                </div>

                <div class="second-sec">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <h5 class="bold oc-titles">অর্ডারের দিন</h5>
                            <h6 class="oc-sub">১৮ জানুয়ারি, ২০২৩</h6>
                        </div>

                        <div class="col-md-3 text-center">
                            <h5 class="bold oc-titles">অর্ডার নাম্বার</h5>
                            <h6 class="oc-sub">৩৩০২৯৩</h6>
                        </div>

                        <div class="col-md-3 text-center">
                            <h5 class="bold oc-titles">পেমেন্ট</h5>
                            <h6 class="oc-sub">বিকাশ</h6>
                        </div>

                        <div class="col-md-3 text-center">
                            <h5 class="bold oc-titles">ঠিকানা</h5>
                            <h6 class="oc-sub">নারায়নগঞ্জ</h6>
                        </div>
                    </div>
                </div>

                <div class="extra-sec">
                    <div class="row">
                        <div class="col-md-6 text-center total-product-number">
                            <h5 class="bold oc-titles">প্রডাক্টের সংখ্যা</h5>
                            <h6 class="oc-sub">১২ টি</h6>
                        </div>
                        <div class="col-md-6 text-center total-product-price">
                            <h5 class="bold oc-titles">সর্বমোট মূল্য</h5>
                            <h6 class="oc-sub">১৬,০০০ <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></h6>
                        </div>
                    </div>
                </div>

                <div class="third-sec">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('frontend/assets/images/b3.png')}}" class="confirm-page-img" alt="">
                        </div>
                        <div class="col-md-3 middle justify-center">
                            <div class="title-cat-wrapper">
                                <h5 class="bold oc-titles">কাতল মাছ</h5>
                                <h6 class="oc-sub">মিঠা পানির মাছ</h6>
                            </div>
                        </div>
                        <div class="col-md-3 middle justify-center">
                            <p class="bold pac-size">প্যাকেট (৫০০) x ২</p>
                        </div>
                        <div class="col-md-3 middle justify-center">
                            <p class="bold pac-size"> সর্বমোট মূল্যঃ ৬,০০০ <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('frontend/assets/images/b3.png')}}" class="confirm-page-img" alt="">
                        </div>
                        <div class="col-md-3 middle justify-center">
                            <div class="title-cat-wrapper">
                                <h5 class="bold oc-titles">কাতল মাছ</h5>
                                <h6 class="oc-sub">মিঠা পানির মাছ</h6>
                            </div>
                        </div>
                        <div class="col-md-3 middle justify-center">
                            <p class="bold pac-size">প্যাকেট (৫০০) x ২</p>
                        </div>
                        <div class="col-md-3 middle justify-center">
                            <p class="bold pac-size"> সর্বমোট মূল্যঃ ৬,০০০ <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('')}}frontend/assets/images/b3.png" class="confirm-page-img" alt="">
                        </div>
                        <div class="col-md-3 middle justify-center">
                            <div class="title-cat-wrapper">
                                <h5 class="bold oc-titles">কাতল মাছ</h5>
                                <h6 class="oc-sub">মিঠা পানির মাছ</h6>
                            </div>
                        </div>
                        <div class="col-md-3 middle justify-center">
                            <p class="bold pac-size">প্যাকেট (৫০০) x ২</p>
                        </div>
                        <div class="col-md-3 middle justify-center">
                            <p class="bold pac-size"> সর্বমোট মূল্যঃ ৬,০০০ <i class="fa-sharp fa-solid fa-bangladeshi-taka-sign"></i></p>
                        </div>
                    </div>
                </div>

                <div class="fourth-sec">
                    <div class="row">
                       <div class="col-md-12 footer-regards-text">
                        <p>আপনার পণ্যটি ডেলিভারি হওয়ার পূর্বে আমরা আপনাকে নিশ্চিতকরণ বার্তা পাঠাবো</p>
                        <p>ধন্যবাদান্তে, </br>কিবরিয়া</p> 
                       </div>
                    </div>
                </div>

                <div class="fifth-sec">
                    <div class="row">
                       <div class="col-md-8 fifth-col-1">
                        <p class="c-us-oc">আপনার কোন প্রশ্ন থাকলে আমাদের সাথে যোগাযোগ করুনঃ <span class="bold"><a href="#">যোগাযোগ করুন</a></span></p>
                       </div>
                       <div class="col-md-4 justify-center fifth-col-2">
                        <h6 class="c-us-oc">Copyright © 2023 Innova Infosys</h6>
                       </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container justify-right">
        <button class="print-btn bangla-font" onclick="window.print()">প্রিন্ট করুন!</button>
    </div>
</section>
@endsection()