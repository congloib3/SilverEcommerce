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
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Hình ảnh</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($commodities as $commodity)
                <tr>
                    <td>
                        {{$commodity->name}}
                    </td>
                    <td><img src="{{asset('upload/commodities/'.$commodity->id.'/'.$commodity->image)}}" width="100px" alt=""></td>
                    <td>
                    <a class="btn btn-warning" href="{{URL::to('admin/update_commodity/'.$commodity->id)}}">Sửa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
