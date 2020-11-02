@extends('admin.layout_admin')
@section('admin_content')
<div class="card-body">
    <div class="table-responsive">
        <?php
            $message = Session::get('message_dashboard');
            if($message) {
                echo '<span class="text-danger">'.$message.'</span>';
                Session::put('message_dashboard', null);
            }
         ?>
        <a class="btn btn-success float-right my-3" href="{{URL::to('admin/create-category')}}">Thêm danh mục</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Hình ảnh</th>
                    <th>Loại sản phẩm</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td><img src="{{asset('upload/categories/'.$category->id.'/'.$category->image)}}" width="100px" alt=""></td>
                    <td>
                        {{$category->commodity_id}}
                    </td>
                    <td>
                    <a class="btn btn-warning" href="{{URL::to('admin/update_categories/'.$category->id)}}">Sửa</a>
                        <a class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="{{URL::to('admin/remove_categories/'.$category->id)}}">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
