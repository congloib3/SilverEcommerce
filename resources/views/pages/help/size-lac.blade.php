@extends('layout')
@section('content')
<div class="rte clearfix text-content">
    <h1 style="text-align:center; text-transform:uppercase;">Cách đo kích thước vòng lắc tay</h1>
    <h2>Cách thứ nhất:</h2>
    <p class="p1" style="text-align: justify;">Lấy vòng tay đang đeo và dùng thước đặt ngang ở giữa vòng tay để đo đường
        kính lọt lòng.</p>
    <p>Đường kính đó chính là size vòng tay của bạn, thường trong khoảng từ 48mm đến 58mm.</p>
    <p style="text-align: center"><img src="images/size-lac-1.webp" alt="do kich thuoc ni size vong tay lac tay"></p>
    <p>Lấy lắc tay đang đeo và dùng thước đặt ngang lắc tay để đo chiều dài. Lấy chiều dài đó chia cho 3.14 là sẽ ra
        size vòng tay, lắc tay</p>
    <h2>Cách thứ hai:</h2>
    <p>Bước 1: Dùng một sợi dây quấn quanh cổ tay đeo vòng hay lắc tay</p>
    <p>Bước 2: Đo chiều dài sợi dây</p>
    <p>Bước 3: Lấy chiều dài đó chia cho 3.14 là sẽ ra size vòng tay, lắc tay.</p>
    <p style="text-align: center"><img src="{{asset('images/size-lac-2.webp')}}"
            alt="do vong tay lac tay bang day quan quanh co tay"></p>
@endsection
