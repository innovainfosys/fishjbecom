<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jquery link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- custom css link      -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

    <!-- owl carousel links  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awesome custom link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">



    <title>Hello, world!</title>
  </head>
  <body>
<!-- nav code start from here -->

<nav>
        <div class="container">
           <div class="row middle">

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-8">
                        <a href="{{route('Home')}}">
                            <img src="{{asset('frontend/assets/logos/logo.png')}}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>

            <div class="col-md-8 d-flex middle justify-right">
                <div class="lr-padding"><p class="bangla-font">মোবাইলঃ ০১৮৬১১৮১৫৯৫</p></div>
                <div><a href="#"><i class="fa-brands fa-facebook-f lr-padding"></i></a></div>
                <div><button class="log-btn bangla-font">লগ ইন</button></div>
                <div><button class="bangla-font cart-btn">আমার সওদা<i class="cart fa-solid fa-cart-shopping"></i> <span class="cart-count"></span> </button></div>
            </div>

           </div>
        </div>

        <!-- search code start from here  -->

<section class="search">
    <div class="container">
          <div class="row">
            <div class="col-md-12 d-flex">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                <div class="dropdown">
                    <button class=" bangla-font btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      মাছের তালিকা
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item poppins" href="#">সামুদ্রিক মাছ</a>
                      <a class="dropdown-item poppins" href="#">মিঠা পানির মাছ</a>
                    </div>
                  </div>
            </div>

          </div>
    </div>
</section>

<!-- search code end from here  -->

</nav>
