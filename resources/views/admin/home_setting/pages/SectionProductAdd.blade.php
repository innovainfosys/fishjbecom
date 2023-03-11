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

                        <form class="row g-3" action="{{route('Home.Page.Section.Product.Add.Process',$homeBlock->id)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-6">
                                <label for="Name" class="col-form-label">Products</label>
                                <select class="form-control select" name="product_id" >
                                    @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->title}}</option>
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

                        </form>

                    </div>

                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>Product Title</th>
                                <th>Action</th>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($homeBlockProducts as $row)
                                <tr>
                                    <td>{{$row->product->title}}</td>
                                    <td><a href="{{route('Home.Page.Section.Product.delete.Process', $row->id)}}" class="delete btn btn-danger btn-sm"> <i class="ri ri-delete-bin-6-line"> </i></a> </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
