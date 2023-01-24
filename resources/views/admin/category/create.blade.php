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

                        <form class="row g-3" action="{{route('store.category')}}" method="post">
                            @csrf
                            <div class="col-12">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" >
                                @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control @error('name') is-invalid @enderror" id="inputAddress" placeholder="Write description">
                                @error('description')
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
