@extends('admin.layouts.master');

@section('title')
    {{'Add Product'}}
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Product</h5>

                        <form class="row g-3" action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-6">
                                <label for="Name" class="col-form-label">Product Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="inputName" >
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
                                            @foreach($categories as $category)
                                                <?php $dash=''; ?>
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @if(count($category->subcategory))
                                                    @include('admin.category.subCategoryList-option',['subcategories' => $category->subcategory])
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            <div class="col-12">
                                <label for="weight" class="col-form-label">Product Variations</label>
                                <div class="product-variations">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" class="form-control" name="weight[]" placeholder="weight">
                                        </div>
                                        <div class="col-2">
                                            <input type="number" class="form-control" name="price[]" placeholder="Product Price">
                                        </div>
                                        <div class="col-2">
                                            <input type="number" class="form-control" name="quantity[]" placeholder="Product Quantity">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" class="form-control" name="sku[]" placeholder="product sku">
                                        </div>
                                        <div class="col-2">
                                            <a class="btn btn-success btn-sm" id="addBtn">Add more</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="col-form-label">Description</label>
                                <textarea class="form-control" name="description"></textarea>
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
        $('#addBtn').on('click', function () {
            $('.product-variations').append(`<div class="row mt-2">
                                        <div class="col-3">
                                            <input type="text" class="form-control" name="weight[]" placeholder="weight">
                                        </div>
                                        <div class="col-2">
                                            <input type="number" class="form-control" name="price[]" placeholder="Product Price">
                                        </div>
                                        <div class="col-2">
                                            <input type="number" class="form-control" name="quantity[]" placeholder="Product Quantity">
                                        </div>
                                         <div class="col-3">
                                            <input type="text" class="form-control" name="sku[]" placeholder="product sku">
                                        </div>
                                        <div class="col-2">
                                            <a class="btn btn-danger btn-sm deleteBtn" > <i class="bi bi-trash"></i> </a>
                                        </div>
                                    </div>`);

        });

        $(document).on('click', '.deleteBtn', function (){
            $(this).parent().parent().remove();
        })

    </script>
@endsection
