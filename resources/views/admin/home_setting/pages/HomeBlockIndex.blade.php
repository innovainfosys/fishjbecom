@extends('admin.layouts.master')
@section('title')
    {{'Home Page Section List'}}
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($homeBlocks as $homeBlock)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$homeBlock->title}}</td>

                                    <td>
                                        <a href="{{route('Home.Page.Section.Product.Add', $homeBlock->id)}}"  data-id="" class="btn btn-success btn-sm">Add Product</a>
                                        <a href="{{route('Home.Page.Section.Edit', $homeBlock->id)}}"  class="edit btn btn-info btn-sm"> <i class="ri  ri-edit-2-fill"> </i> </a>

                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
