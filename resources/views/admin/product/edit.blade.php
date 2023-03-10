@extends('admin.layouts.master');

@section('title')
    {{'Edit Product'}}
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Product</h5>

                        <form class="row g-3" action="{{route('update.product', $product->id)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-6">
                                <label for="Name" class="col-form-label">Product Title</label>
                                <input type="text" name="title" value="{{$product->title}}" class="form-control @error('title') is-invalid @enderror" id="inputName" >
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="col-form-label">Select a Category</label>
                                <select name="category_id" class="form-select">
                                    <option></option>
                                    @if($categories)
                                        @foreach($categories as $item)
                                            <?php $dash=''; ?>
                                            <option value="{{$item->id}}" @if($item->id == $product->category_id ) selected @endif>{{$item->name}}</option>
                                                @if(count($item->subcategory))
                                                    @include('admin.category.subCategoryList-option',['subcategories' => $item->subcategory])
                                                @endif
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="weight" class="col-form-label">Product Variations</label>
                                <div class="product-variations">
                                    @foreach($product->variations as $variation)
                                    <div class="row">
                                        <input type="hidden" value="{{$variation->id}}" name="variation_id[]">
                                        <div class="col-3">
                                            <input type="text" value="{{$variation->weight}}" class="form-control" name="weight[]" placeholder="weight">
                                        </div>
                                        <div class="col-2">
                                            <input type="number" value="{{$variation->price}}" class="form-control" name="price[]" placeholder="Product Price">
                                        </div>
                                        <div class="col-2">
                                            <input type="number"  value="{{$variation->quantity}}"  class="form-control" name="quantity[]" placeholder="Product Quantity">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" value="{{$variation->sku}}" class="form-control" name="sku[]" placeholder="product sku">
                                        </div>
                                        @if($loop->iteration >= 2)
                                            <div class="col-2">
                                            <a onclick="deleteVariation(this, {{ $variation->id }})" class="btn btn-danger btn-sm deleteBtn" > <i class="bi bi-trash"></i> </a>
                                            </div>
                                        @else
                                            <div class="col-2">
                                                <a class="btn btn-success btn-sm addBtn" id="addBtn">Add more</a>
                                            </div>
                                        @endif
                                    </div>
                                        <div class="mt-2"></div>
                                    @endforeach
                                </div>

                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="col-form-label">Description</label>
                                <textarea class="form-control" name="description">{{$product->description}}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="inputAddress" class="col-form-label">Gallery Images</label>
                                <input type="file" name="image[]" multiple="" accept="images/*" class="form-control @error('image') is-invalid @enderror" id="formFile">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    @if($product->productImages)
                                            @foreach($product->productImages as $image)
                                            <div class="col-md-2">
                                                <img src="{{asset('uploads/images/products/'.$image->image)}}" style="height: 80px; width: 80px;" class="me-4 border">
                                                <a class="d-block" href="{{route('product.image.delete', $image->id)}}">Remove</a>
                                            </div>
                                           @endforeach
                                </div>
                                @else
                                <h5>No Image Added</h5>
                                @endif
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form><!-- Vertical Form -->
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        $('.addBtn').on('click', function () {
            $('.product-variations').append(`<div class="row mt-2">
                                        <div class="col-3">
                                            <input type="text" class="form-control" name="new_weight[]" placeholder="weight">
                                        </div>
                                        <div class="col-2">
                                            <input type="number" class="form-control" name="new_price[]" placeholder="Product Price">
                                        </div>
                                        <div class="col-2">
                                            <input type="number" class="form-control" name="new_quantity[]" placeholder="Product Quantity">
                                        </div>
                                         <div class="col-3">
                                            <input type="text" class="form-control" name="new_sku[]" placeholder="product sku">
                                        </div>
                                        <div class="col-2">
                                            <a class="btn btn-danger btn-sm deleteBtn" > <i class="bi bi-trash"></i> </a>
                                        </div>
                                    </div>`);

        });

        function deleteVariation(el, id)
        {
            if (Number(id) > 0) {
                $('.product-variations').append('<input type="hidden" name="delete_variation[]" value="' + id + '" />');
            }

            $(el).parent().parent().remove();
        }

        $(document).on('click', '.deleteBtn', function (){
            $(this).parent().parent().remove();
        })



    </script>
@endsection
