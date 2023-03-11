@extends('admin.layouts.master');

@section('title')
    {{'Update Section to Home Page'}}
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Section</h5>

                        <form class="row g-3" action="{{route('Home.Page.Section.Update', $homeBlock->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-6">
                                <label for="Name" class="col-form-label">Section Title</label>
                                <input type="text" name="title" value="{{$homeBlock->title}}" class="form-control @error('title') is-invalid @enderror" id="inputName" >
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
