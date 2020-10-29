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
                        echo '<span class="text-success">'.$message.'</span>';
                        Session::put('message', null);
                    }
                ?>
                <form action="{{URL::to('admin/banners')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Hình Ảnh</label>
                                    <input required class=" py-4" id="image" name="image" type="file" />
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
@endsection
