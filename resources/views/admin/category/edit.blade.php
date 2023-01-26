@extends('admin.layouts.master');

@section('title')
    {{'Edit Category'}}
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Category</h5>

                        <form class="row g-3" action="{{route('update.category',$category->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label for="Name" class="col-form-label">Name</label>
                                <input type="text" name="name" value="{{$category->name}}" class="form-control @error('name') is-invalid @enderror" id="inputName" >
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="col-form-label">Description</label>
                                <input type="text" name="description" value="{{$category->description}}" class="form-control @error('name') is-invalid @enderror" id="inputAddress" placeholder="Write description">
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="inputCategory" class="col-form-label">Select a Parent Category</label>
                                <select  name="parent_id" class="form-select">
                                    <option value="">None</option>
                                    @if($categories)
                                        @foreach($categories as $item)
                                            <?php $dash=''; ?>
                                            <option value="{{$item->id}}" @if($category->parent_id == $item->id ) selected @endif>{{$item->name}}</option>
                                            @if(count($item->subcategory))
                                                @include('admin.category.subcategoryList-option-update', ['subcategories' => $item->subcategory])
                                            @endif
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                                <div class="col-12">
                                    <label for="inputAddress" class="col-form-label">Image</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="formFile">

                                    <img class="img-thumbnail mt-2" src="{{asset('uploads/images/category/'.$category->image)}}" width="150" height="150">
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
    </section>

@endsection
