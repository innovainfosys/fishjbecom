@extends('admin.layouts.master')
@section('title')
    {{'Category'}}
@endsection

@section('content')
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                   <div class="card-body">
                       <h5 class="card-title">Fish Categories</h5>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Parent Category</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($categories))
                    <?php $_SESSION['i'] = 0; ?>
                @foreach($categories as $category)
                    <?php $_SESSION['i']++ ?>
                <tr>
                    <?php $dash=''; ?>
                    <td>{{$_SESSION['i']}}</td>
                    <td>{{$category->name}}</td>

                    <td>
                        @if(isset($category->parent_id))
                            {{$category->subcategory->name}}
                        @else
                            None
                        @endif
                    </td>
                        <td><img src="{{asset('uploads/images/category/'.$category->image)}}" width="100" height="100"></td>
                    <td>
                        <a href="{{route('edit.category',$category->id)}}"  class="edit btn btn-info btn-sm"> <i class="ri  ri-edit-2-fill"> </i> </a>
                        <a href="javascript:void(0)"  data-id="{{$category->id}}" class="delete btn btn-danger btn-sm"> <i class="ri ri-delete-bin-6-line"> </i> </a>
                    </td>
                </tr>
                @if(count($category->subcategory))
                    @include('admin.category.subCategoryList',['subcategories' => $category->subcategory])
                @endif
                @endforeach
                    <?php unset($_SESSION['i']); ?>
                @endif

                </tbody>
            </table>

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
                            url: '{{ route('delete.category') }}',
                            method: 'delete',
                            data: {
                                id: id,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                console.log(response);
                                Swal.fire(
                                    'Deleted!',
                                    'Category has been deleted.',
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
