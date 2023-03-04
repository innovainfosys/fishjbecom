@extends('admin.layouts.master');

@section('title')
    {{'Add Category'}}
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Category</h5>

                        <form class="row g-3" action="{{route('store.category')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label for="Name" class="col-form-label">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" >
                                @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="col-form-label">Slug</label>
                                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="inputAddress" placeholder="Write slug">
                                @error('slug')
                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror

                            <div class="col-12">
                                <label for="inputAddress" class="col-form-label">Description</label>
                                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="inputAddress" placeholder="Write description">
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="col-form-label">Select a Parent Category</label>
                                <select name="category_id" class="form-select">
                                    <option value="">None</option>
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

                                <div class="col-12">
                                    <label for="inputAddress" class="col-form-label">Image</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="formFile">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
        </div>
    </section>

@endsection
