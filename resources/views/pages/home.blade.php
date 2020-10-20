@extends('welcome')
@section('home')
<div class="collections-container collections-container__index">
    <div class="container-limitter">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="collection-item collection-item__index">
                    <a href="/collections/trang-suc-bac">
                        <img src="https://file.hstatic.net/1000103292/collection/collection_-_silver_franchise_92221bc001a845929ab5d47515b9cc89.jpg" alt="Trang sức bạc">
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="collection-item collection-item__index">
                    <a href="/collections/trang-suc-vang">
                        <img src="https://file.hstatic.net/1000103292/collection/collection_-_gold_franchise_2df14d363bd349a495112b5e00f13b77.jpg" alt="Trang sức vàng">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="policies-container policies-container__index">
  <div class="container-limitter">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="policy-item policy-item__payment">
          <div class="policy-content">
            <h3><span class="fas fa-home"></span> Liên hệ</h3>
            <p>
              <strong>Hanada Q3</strong>: 386/2a Lê Văn Sỹ, P.14, Q.3
            </p>
            <p>
              <strong>Hotline</strong>: <a href="tel:+842873096968">028.7309.6968</a>
            </p>
            <p>
              <strong>Giờ mở cửa</strong> Thứ 2 - Chủ Nhật: 9h30 - 21h30
            </p>
          </div>
          <div class="policy-background">
            <img alt="" src="//theme.hstatic.net/1000103292/1000578902/14/images.transparent-background.png?v=565">
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="policy-item policy-item__warranty">
          <div class="policy-content">
            <h3><span class="fas fa-info-circle"></span> Trợ giúp</h3>
            <p>
              <span class="far fa-angle-double-right"></span> <a href="/pages/cach-do-size-nhan">Cách đo size nhẫn</a>
            </p>
            <p>
              <span class="far fa-angle-double-right"></span> <a href="/pages/cach-do-size-day-chuyen">Cách do size dây chuyền</a>
            </p>
            <p>
              <span class="far fa-angle-double-right"></span> <a href="/pages/cach-do-size-lac">Cách do size lắc</a>
            </p>
            <p>
              <span class="far fa-angle-double-right"></span> <a href="/pages/cach-do-size-vong">Cách đo size vòng tay</a>
            </p>
            <p>
              <span class="far fa-angle-double-right"></span> <a href="/blogs/news/cach-giu-cho-trang-suc-bac-sang-dep">Cách giữ cho trang sức bạc sáng đẹp.</a>
            </p>
          </div>
          <div class="policy-background">
            <img alt="" src="//theme.hstatic.net/1000103292/1000578902/14/images.transparent-background.png?v=565">
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="policy-item policy-item__shipping">
          <div class="policy-content">
            <h3><span class="fas fa-book-open"></span> Chính sách</h3>
            <p>
              <span class="far fa-angle-double-right"></span> <a href="/pages/chinh-sach-bao-hanh">Chính sách bảo hành</a>
            </p>
            <p>
              <span class="far fa-angle-double-right"></span> <a href="/pages/giao-hang-va-thanh-toan">Giao hàng và thanh toán</a>
            </p>
          </div>
          <div class="policy-background">
            <img alt="" src="//theme.hstatic.net/1000103292/1000578902/14/images.transparent-background.png?v=565">
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="policy-item policy-item__contact">
          <div class="policy-content">
            <div class="row">
              <div class="col-sm-12">
                <h3>Đăng kí để nhận tin ưu đãi</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  <label for="contactForm_Name">Họ tên</label>
                  <input class="form-control" id="contactForm_Name" name="name" placeholder="Họ tên" type="text">
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <label for="contactForm_Message">Ngày sinh</label>
                  <input class="form-control" id="contactForm_Message" name="message" placeholder="dd/mm/yyyy" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                <div class="form-group">
                  <label for="contactForm_PhoneNumber">Số điện thoại</label>
                  <input class="form-control" id="contactForm_PhoneNumber" name="phone" placeholder="Số điện thoại" type="text">
                </div>
              </div>
              <div class="col-xs-6">
                <div class="form-group">
                  <label for="contactForm_Email">Email</label>
                  <input class="form-control" id="contactForm_Email" name="name" placeholder="Email" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="form-group">
                  <button class="btn btn-primary" id="contactForm_Submit" type="button">Gửi</button>
                </div>
              </div>
            </div>
          </div>
          <div class="policy-background">
            <img alt="" src="//theme.hstatic.net/1000103292/1000578902/14/images.transparent-background.png?v=565">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
