@include('frontend.includes.Header')


    <section>
        <div class="container">
            @foreach($product as $row)
            <div class="row">

                <div class="col-md-6">
                    <div class="product-page-left-wrapper">
                        <div class="product-title">
                            <h1 class="bangla-font">{{$row->title}}</h1>
                        </div>
                        <div class="product-image">
                            <img src="{{asset('frontend/assets/images/new1.jpg')}}" class="img-fluid" id="product-image1" alt="">
                            <img src="{{asset('frontend/assets/images/b2.png')}}" class="img-fluid big-img" id="product-image2" alt="">
                            <img src="{{asset('frontend/assets/images/b3.png')}}" class="img-fluid  big-img" id="product-image3" alt="">
                            <img src="{{asset('frontend/assets/images/b4.png')}}" class="img-fluid big-img" id="product-image4" alt="">


                            <div class="row mt-2 owl-carousel owl-theme">
                                <div class="col-md-3 item"><img src="{{asset('frontend/assets/images/new1.jpg')}}" onclick="galleryItem1()" class="img-fluid gallery-images" alt=""></div>
                                <div class="col-md-3 item"><img src="{{asset('frontend/assets/images/b2.png')}}" onclick="galleryItem2()" class="img-fluid gallery-images" alt=""></div>
                                <div class="col-md-3 item"><img src="{{asset('frontend/assets/images/b3.png')}}" onclick="galleryItem3()" class="img-fluid gallery-images" alt=""></div>
                                <div class="col-md-3 item"><img src="{{asset('frontend/assets/images/b4.png')}}" onclick="galleryItem4()" class="img-fluid gallery-images" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-6">
                    <div class="product-page-right-wrapper ">
                        <div class="billing-title">
                            <h1 class="bangla-font">বিলিং</h1>
                        </div>

                        <div class="price-wrapper mt-5">
                            <div class="row">
                                <form></form>
                                @foreach($row->variations as $variation)
                                <div class="col-md-4 mb-4 productWeight">
                                    <p class="mb-2 bold pack-1">প্যাকেটের পরিমাণ</p>
                                    <div class="billing-col" id="billCol">
                                        <div class="billing-weight-wrapper mb-4"><p><span class="bold">পরিমাণঃ </span>{{$variation->weight}}</p></div>
                                        <div class="billing-price-wrapper mb-4"><p><span class="bold">মূল্যঃ </span>{{$variation->price}}</p></div>
                                            <div class="label-wrapper">
                                                <label for="flexCheckDefault">lorem</label>
                                                <input type="radio" name="packet" id="flexCheckDefault" value="{{$variation->id}}">
                                            </div>

                                        {{--                                        <div class="billing-select-btn text-center bangla-font"><p id="billSelectBTN" onclick="billSelect()"><a href="">নির্বাচন করুন</a></p></div>--}}
{{--                                        <div class="billing-select-btn text-center bangla-font"><p id="billSelectedBTN"><a href="">নির্বাচিত</a></p></div>--}}
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>



                        <div class="packet-pieces-wrap wrap">
                                <p class="mb-3 bold">প্যাকেটের সংখ্যা</p>
                        <button type="button" id="sub" class="sub">-</button>
                        <input class="count" type="text" id="1" value="1" min="1" max="100" />
                        <button type="button" id="add" class="add">+</button>

                        <div class="mt-4 price-input">
                            <span class="bold">মূল্যঃ </span><input type="text" value="">
                        </div>

                        </div>


                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-md-12 product-desc">
                    <h1 class="product-desc-title">{{$row->description}}</h1>
            </div>
            @endforeach

        </div>
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

        // bill select button js code

        var billSelectBTN1 = document.getElementById('billSelectBTN1');
        var billSelectedBTN1 = document.getElementById('billSelectedBTN1');
        var billCol1 = document.getElementById('billCol1');

        var billSelectBTN2 = document.getElementById('billSelectBTN2');
        var billSelectedBTN2 = document.getElementById('billSelectedBTN2');
        var billCol2 = document.getElementById('billCol2');

        var billSelectBTN3 = document.getElementById('billSelectBTN3');
        var billSelectedBTN3 = document.getElementById('billSelectedBTN3');
        var billCol3 = document.getElementById('billCol3');




        function billSelect1(){
            billSelectBTN1.style.display     = "none";
            billSelectedBTN1.style.display   = "block";
            billCol1.style.boxShadow         = "1px 0px 10px 1px #00975878";
            billCol2.style.boxShadow        = "none";
            billCol3.style.boxShadow        = "none";
            billCol1.style.border            = "2px solid #0097587d";
            billSelectedBTN2.style.display  = "none";
            billSelectBTN2.style.display    = "block";
            billSelectedBTN3.style.display  = "none";
            billSelectBTN3.style.display    = "block";
        }
        function billSelect2(){
            billSelectBTN2.style.display    = "none";
            billSelectedBTN2.style.display  = "block";
            billSelectedBTN1.style.display   = "none";
            billSelectBTN1.style.display     = "block";
            billCol1.style.boxShadow         = "none";
            billCol2.style.boxShadow        = "1px 0px 10px 1px #00975878";
            billCol3.style.boxShadow        = "none";
            billCol2.style.border           = "2px solid #0097587d";
            billSelectedBTN3.style.display  = "none";
            billSelectBTN3.style.display    = "block";
        }
        function billSelect3(){
            billSelectBTN3.style.display    = "none";
            billSelectedBTN3.style.display  = "block";
            billSelectedBTN1.style.display   = "none";
            billSelectBTN1.style.display     = "block";
            billCol1.style.boxShadow         = "none";
            billCol2.style.boxShadow        = "none";
            billCol3.style.boxShadow        = "1px 0px 10px 1px #00975878";
            billCol3.style.border           = "2px solid #0097587d";
            billSelectedBTN2.style.display  = "none";
            billSelectBTN2.style.display    = "block";
        }


        // gallery image js code
        var productImage1 = document.getElementById('product-image1');
        var productImage2 = document.getElementById('product-image2');
        var productImage3 = document.getElementById('product-image3');
        var productImage4 = document.getElementById('product-image4');

        function galleryItem1(){
            productImage1.style.display ='block';
            productImage2.style.display ='none';
            productImage3.style.display ='none';
            productImage4.style.display ='none';
        }
        function galleryItem2(){
            productImage1.style.display ='none';
            productImage2.style.display ='block';
            productImage3.style.display ='none';
            productImage4.style.display ='none';
        }
        function galleryItem3(){
            productImage1.style.display ='none';
            productImage2.style.display ='none';
            productImage3.style.display ='block';
            productImage4.style.display ='none';
        }
        function galleryItem4(){
            productImage1.style.display ='none';
            productImage2.style.display ='none';
            productImage3.style.display ='none';
            productImage4.style.display ='block';
        }

    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- owl carousel js and jquery link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <script>
      $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:3
          },
          600:{
              items:3
          },
          1000:{
              items:3
          }
      }
  })
    </script>

@include('frontend.includes.ProductPageFooter')

