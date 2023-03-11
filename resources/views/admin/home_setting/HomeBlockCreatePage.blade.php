@extends('admin.layouts.master');

@section('title')
    {{'Add Section to Home Page'}}
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Products to Section</h5>

                        <form class="row g-3" action="{{route('Home.Page.Section.Insert')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-6">
                                <label for="Name" class="col-form-label">Products</label>
                                <select class="form-control" name="product_id">
                                    @foreach($product as $product)
                                    <option>{{$product->title}}</option>
                                    @endforeach
                                </select>
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form><!-- Vertical Form -->
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
