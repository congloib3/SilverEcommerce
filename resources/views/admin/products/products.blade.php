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
        <a class="btn btn-success float-right my-3" href="{{URL::to('admin/create-product')}}">Thêm sản phẩm</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Danh mục</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Số lượng</th>
                    <th>Hình ảnh</th>
                    <th>Hiển thị</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td width="5%">{{$product->category->name}}</td>
                    <td width="10%">{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td width="20%">{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td><img src="{{asset('upload/products/'.$product->id.'/'.$product->image)}}" width="100px" alt=""></td>
                    <td>
                        @if($product->status == 1)
                            Hiển thị
                        @else
                            Ẩn
                        @endif
                    </td>
                    <td  width="25%">
                    <a class="btn btn-warning" href="{{URL::to('admin/update_product/'.$product->id)}}">Sửa</a>
                    <a class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="{{URL::to('admin/remove_product/'.$product->id)}}">Xóa</a>
                    <a class="btn btn-primary" href="{{URL::to('admin/thumbnails/'.$product->id)}}">Thumbnail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-xs-12 col-6">
                {{ $products->links() }}
              </div>
        </div>
    </div>
</div>
@endsection
