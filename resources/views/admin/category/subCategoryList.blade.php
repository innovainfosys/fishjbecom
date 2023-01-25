<?php $dash.='-- '; ?>
@foreach($subcategories as $subcategory)
    <?php $_SESSION['i']++; ?>
    <tr>
        <td>{{$_SESSION['i']}}</td>
        <td>{{$dash}}{{$subcategory->name}}</td>
        <td>{{$subcategory->parent->name}}</td>
        <td>{{$category->description}}</td>
        <td>
            <a href="{{route('edit.category',$category->id)}}"  class="edit btn btn-info btn-sm"> <i class="ri  ri-edit-2-fill"> </i> </a>
            <a href="javascript:void(0)"  data-id="{{$category->id}}" class="delete btn btn-danger btn-sm"> <i class="ri ri-delete-bin-6-line"> </i> </a>
        </td>
    </tr>
    @if(count($subcategory->subcategory))
        @include('admin.category.subCategoryList',['subcategories' => $subcategory->subcategory])
    @endif
@endforeach
