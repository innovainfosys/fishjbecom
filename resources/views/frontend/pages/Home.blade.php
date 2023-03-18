@extends('frontend.layouts.Master')

@section('content')
    <section>
        <div class="owl-carousel owl-theme">
            <div class="home-slide item"><img src="{{asset('frontend/assets/images/fish-2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="home-slide item"><img src="{{asset('frontend/assets/images/fish-2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="home-slide item"><img src="{{asset('frontend/assets/images/fish-2.jpg')}}" class="img-fluid" alt=""></div>
        </div>
    </section>

    <!-- slider section code start from here  -->

    <!-- fish list section start from here -->

   @include('frontend.pages.FishTalika')

    <!-- fish list section end from here -->

    <!-- 2 categories fish section code start from here -->

   @include('frontend.pages.CategoryProduct');

    @include('frontend.includes.Footer')
@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function () {
            const clg = console.log;
            /* $('.variationOptionSelector').click(function(e){
                clg('Clicked Variation Option: ' + this)
            }) */



            $('.cartBtn').click(function (e) {
                e.preventDefault();
                // clg(this)
                const productId = $(this).attr("data-productid")
                const variationId = $(`#variation_id_${productId}`).val();


                $.ajax({
                    method: "POST",
                    url:  "{{route('AjaxCart')}}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'product_id' : productId,
                        'variation_id' : variationId,
                    },

                    success:function (response) {
                        alert(response.status);
                        $('.productModal').modal('hide');
                    }

                });

            });

        });
    </script>
@endsection
