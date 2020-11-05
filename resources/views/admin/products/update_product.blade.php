@extends('admin.layout_admin')
@section('admin_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-body">
                <?php
                    $message = Session::get('message');
                    if($message) {
                        echo '<span class="text-danger">'.$message.'</span>';
                        Session::put('message', null);
                    }
                ?>
                <form action="{{URL::to('admin/update_product/'.$product->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Tên Danh Mục</label>
                                    <select required="required" class="form-control" name="category_id">
                                        @foreach ($categories as $key => $value)
                                            <option value="{{ $value->id }}" {{ $product->category_id == $value->id ? "selected" : '' }}>{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Tên sản phẩm</label>
                                    <input class="form-control" value="{{ $product->name}}" id="name" name="name" type="text" placeholder="Tên Danh Mục" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Giá</label>
                                    <input class="form-control" value="{{ $product->price}}" id="product_price" name="price" type="text" placeholder="Tên Danh Mục" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Mô tả</label>
                                    <input class="form-control" value="{{ $product->description}}" id="product_description" name="description" type="text" placeholder="Tên Danh Mục" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Số lượng</label>
                                    <input class="form-control" value="{{ $product->quantity}}" id="product_quantity" name="quantity" type="text" placeholder="Tên Danh Mục" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Slug</label>
                                        <input class="form-control" value="{{ $product->slug}}" id="slug" name="slug" type="text" placeholder="Slug" />
                                    </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label class="small mb-1" for="inputLastName">Hình Ảnh</label>
                                <input class="" id="category_img_path" name="image" type="file" value="{{$product->image}}"/>
                            </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-info btn-block" value="Lưu"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/slug.js')}}"></script>
@endsection
