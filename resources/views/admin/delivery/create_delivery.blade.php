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
                <form>
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="">Chọn thành phố</label>
                                    <select class="form-control choose city" name="city" id="city">
                                        <option value="">--Chọn thành phố--</option>
                                        @foreach ($city as $key => $value)
                                        <option value="{{$value->matp}}">{{$value->name_city}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="">Chọn quận huyện</label>
                                    <select class="form-control province" name="province" id="province">
                                        <option value="">--Chọn quận huyện--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Phí vận chuyển</label>
                                    <input required class="form-control fee_ship" id="fee_ship" name="fee_ship" type="text" placeholder="Phí vận chuyển" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0"><input type="button" class="btn btn-info btn-block add_delivery" value="Thêm phí vận chuyển"></div>
                    </form>
                </div>
                <div id="load_delivery">

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        fetch_delivery();
        function fetch_delivery(){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:'{{url('/admin/select-feeship')}}',
                method: 'POST',
                data:{_token:_token},
                success:function(data){
                    $('#load_delivery').html(data);
                }
            })
        }
        $(document).on('blur', '.fee_feeship_edit', function(){
            var feeship_id = $(this).data('feeship_id')
            var fee_value = $(this).text();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{url('/admin/update-delivery')}}',
                method: 'POST',
                data: {feeship_id:feeship_id, fee_value:fee_value, _token:_token},
                success: function(data){
                    fetch_delivery();
                }
            })
        })
        $('.add_delivery').click(function(){
            var city = $('.city').val()
            var province = $('.province').val()
            var fee_ship = $('.fee_ship').val()
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{url('/admin/insert-delivery')}}',
                method: 'POST',
                data: {city:city, _token:_token, province:province, fee_ship:fee_ship},
                success: function(data){
                    fetch_delivery();
                }
            })
        })
        $('.choose').on('change', function() {
            var action = $(this).attr('id');
            var matp = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            if(action ==  'city'){
                result = 'province';
            }
            $.ajax({
                url: '{{url('/admin/select-delivery')}}',
                method: 'POST',
                data: {action:action, _token:_token, matp:matp},
                success: function(data){
                    $('#'+result).html(data);
                }
            })
        })
    })
</script>
@endsection
