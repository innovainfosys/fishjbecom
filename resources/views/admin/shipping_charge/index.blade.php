@extends('admin.layouts.master')
@section('title')
    {{'Shipping Charges'}}
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Shipping Charges</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Type</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($shippingCharge as $row)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$row->type}}</td>
                                    <td>{{$row->amount}}</td>
                                    <td>
                                        <a href=""  class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="ri  ri-edit-2-fill"> </i>  </a>
                                    </td>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('Update.Shipping.Charge',$row->id)}}" method="POST">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label  class="form-label">Amount</label>
                                                            <input type="text"  class="form-control" name="amount" value="{{$row->amount}}" required>
                                                            @if ($errors->has('amount'))
                                                                <span style="color: red">{{ $errors->first('amount') }}</span>
                                                            @endif
                                                        </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

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
