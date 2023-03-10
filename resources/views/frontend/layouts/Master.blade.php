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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>

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
                        <img src="{{asset('frontend/assets/logos/logo.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>

            <div class="col-md-8 d-flex middle justify-right">
                <div class="lr-padding"><p class="bangla-font">মোবাইলঃ ০১৮৬১১৮১৫৯৫</p></div>
                <div><a href="#"><i class="fa-brands fa-facebook-f lr-padding"></i></a></div>
                <div><button class="log-btn bangla-font">লগ ইন</button></div>
                <div><button class="bangla-font cart-btn">আমার সওদা<i class="cart fa-solid fa-cart-shopping"></i></button></div>
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

@yield('content')

<!-- footer section code start from here  -->

<section class="footer-section">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="footer-col-1-wrapper">
                    <img src="{{asset('frontend/assets/logos/logo.png')}}" alt="">
                    <p class="footer-col-1-p poppins">Auctor blandit dolorem primis eius odit soluta molestie? </br>Malesuada elementum aut doloremque labo.</p>
                    <div class="footer-icons"><a href="#"><i class="fa-brands fa-facebook-f lr-padding"></i></a> <a href="#"><i class="fa-brands fa-instagram lr-padding"></i></a> <a href="#"><i class="fa-brands fa-linkedin-in lr-padding"></i></a></div>
                </div>
            </div>

            <div class="col-md-4 footer-col-2-wrapper">
                <ul>
                    <li class="poppins footer-link-heading">Useful Links</a></li>
                    <li><a href="#" class="poppins">About Us</a></li>
                    <li><a href="#" class="poppins">Privacy and Policy</a></li>
                    <li><a href="#" class="poppins">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-md-4 footer-col-3-wrapper">
                <ul>
                    <li class="poppins footer-link-heading">Contact Information</a></li>
                    <li class="poppins mb-2">Feel free to contact & reach us !!</li>
                    <li class="poppins"><i class="fa-solid fa-location-dot"></i>203 Fake St. Mountain View, San Francisco, California, USA</li>
                    <li class="poppins"><i class="fa-solid fa-phone"></i>01861181595</li>
                    <li class="poppins"><i class="fa-solid fa-envelope"></i>bdfish@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div><p class="poppins text-center">Copyright © 2023 Innova Infosys. All rights reserved.</p></div>

<!-- footer section code end from here  -->

<!-- ajax and maxcdn link  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- bootstrap javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- owl carousel js cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  


    <script>
      $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>

  </body>
</html>