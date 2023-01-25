@extends('admin.layouts.master')
@section('title')
    {{'Attribute'}}
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product Attributes</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($attributes as $attribute)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$attribute->name}}</td>
                                    <td>{{$attribute->description}}</td>
                                    <td>
                                        <a href="{{route('edit.category',$attribute->id)}}"  class="edit btn btn-info btn-sm"> <i class="ri  ri-edit-2-fill"> </i> </a>
                                        <a href="javascript:void(0)"  data-id="{{$attribute->id}}" class="delete btn btn-danger btn-sm"> <i class="ri ri-delete-bin-6-line"> </i> </a>
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

@section('scripts')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('body').on('click', '.delete', function () {
                var id = $(this).data("id");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{ route('delete.attribute') }}',
                            method: 'delete',
                            data: {
                                id: id,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                console.log(response);
                                Swal.fire(
                                    'Deleted!',
                                    'Attribute has been deleted.',
                                    'success'
                                )
                                location.reload();
                            }
                        });
                    }
                });
            });

        });
    </script>

@endsection
