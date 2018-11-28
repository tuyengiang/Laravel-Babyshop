<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('css/style-reponsive.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('js/owl/dist/assets/owl.theme.default.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('js/owl/dist/assets/owl.carousel.min.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('css/style-reponsive.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap/css/bootstrap.min.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ url('font-icon/css/font-awesome.min.css') }}"/>
      <title>@yield('title')</title>
      <script src="{{ url("js/jquery.js") }}"></script>
      <script src="{{ url("js/owl/dist/owl.carousel.js") }}"></script>
      <script src="{{ url("js/main.js") }}"></script>
</head>
<body class="wapper">
      <div class="header-top">
            <div class="container">
                  <div class="row">
                        <div class="col-md-4 col-md-offset-8">
                              <div class="box-list-top box fill">
                                    <ul>
                                          <li><a href="/">Tài khoản</a></li>
                                          <li><a href="/">Sản phẩm</a></li>
                                          <li><a href="/">Hệ thống cửa hàng</a></li>
                                    </ul>
                              </div>
                        </div>
                  </div>
            </div>
      </div><!--header-top-->

      <header class="header-main">
            <div class="container">
                  <div class="row">
                        <div class="col-md-3 logo">
                              <div class="header-logo">
                                   <ul>
                                         <li class="menu-bars"><i class="fa fa-bars"></i></li>
                                         <li class="logo-text"><a href="{{ route('index') }}"><img src="{{ url('gallery/logo/logo.png') }}" alt=""></a></li>
                                         <li class="store-icon"><i class="fa fa-shopping-basket"></i></li>
                                   </ul>
                              </div>
                        </div>
                        <div class="col-md-6 box-search">
                            <div class="header-content">
                              <form method="post">
                                    <input type="search" name="search" placeholder="Tìm kiếm sản phẩm..." class="input-search">
                                    <button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
                              </form>
                            </div>
                        </div>
                        <div class="col-md-3 box-information">
                              <div class="header-content">
                                    <ul>
                                          <li>
                                                <div class="box-phone-img">
                                                      <img src="{{ url('gallery/icon/phone.png') }}" alt="icon-phone">
                                                </div>
                                                <div class="box-text">
                                                      <p>Hotline</p>
                                                      <p>0965.565.742</p>
                                                </div>
                                          </li>
                                    </ul>
                              </div>
                        </div>
                  </div>
            </div>
      </header><!--header-->

      <nav class="header-bottom">
            <div class="container">
                  <div class="row">
                        <div class="col-md-3 mega-menu-list">
                              <div class="mega-menu"><i class="fa fa-bars"></i> Danh mục sản phẩm</div>
                              <div class="mega-menu-box">
                                    <ul>
                                          @foreach($category as $cate)
                                                <li><a href="{{ route('index-category',$cate->slug) }}">{{ $cate->name_category }}</a>
                                                      {{-- <ul class="sub-menu">
                                                           @foreach($cate_term as $terms)
                                                                  <li><a href="{{ route('index-category-terms',$terms->slug) }}">{{ $terms->category_name }}</a></li>
                                                             @endforeach
                                                      </ul> --}}
                                                </li>
                                          @endforeach
                                    </ul>
                              </div>
                        </div>
                      
                        <div class="col-md-9 wide-nav">
                              <ul>
                                    <li> <a href="{{ route('index') }}">Trang chủ</a></li>
                                    <li> <a href="{{ route('index') }}">Giới thiệu</a></li>
                                    <li> <a href="{{ route('index') }}">Sản phẩm</a></li>
                                    <li> <a href="{{ route('index') }}">Chính sách đại lý</a></li>
                                    <li> <a href="{{ route('index') }}">Tuyển dụng</a></li>
                                    <li> <a href="{{ route('index') }}">Tin tức</a></li>
                                    <li> <a href="{{ route('index') }}">Liên hệ</a></li>
                                    <li class="li-store"> <a href="{{ route('index') }}"><i class="fa fa-shopping-basket"></i></a></li>
                              </ul>
                              <div class="exit"><i class="fa fa-arrow-circle-left"></i></div>
                        </div>
                  </div>
            </div>
      </nav><!--meun-->
      <main class="main">
           @yield("main")
      </main>

      <footer class="footer-main">
            <div class="footer-top">
                  <div class="container">
                        <div class="row">
                              <div class="col-md-6 footer-box-left">
                                    <div class="footer-img"><img src="{{ url('gallery/icon/icon-sale.png') }}" alt=""></div>
                              </div>
                              <div class="col-md-6 footer-box-right">
                                    <form method="post">
                                          <input type="email" class="input-email" placeholder="Địa chỉ email(*)">
                                          <input type="submit" class="btn btn-register" value="Đăng ký">
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
            <section class="footer-content">
                  <div class="container">
                        <div class="row">
                              <div class="col-md-3">
                                    <div class="footer-title">Giới thiệu</div>
                                    <ul>
                                          <li><a href="{{ route('index') }}">Về Babyshop</a></li>
                                          <li><a href="{{ route('index') }}">Hợp tác với Babyshop</a></li>
                                          <li><a href="{{ route('index') }}">Cơ hội nghề nghiệp</a></li>
                                          <li><a href="{{ route('index') }}">Quy chế sàn giao dịch</a></li>
                                          <li><a href="{{ route('index') }}">Các khuyến mại đã bán</a></li>
                                          <li><a href="{{ route('index') }}">Blog Babyshop</a></li>
                                    </ul>
                              </div>
                              <div class="col-md-3">
                                    <div class="footer-title">Chính sách của cửa hàng</div>
                                    <ul>
                                                <li>Hình thức đặt hàng</li>
                                                <li>Hình thức thanh toán</li>
                                                <li>Sử dụng Voucher/ E-voucher</li>
                                                <li>Phương thức vận chuyên</li>
                                                <li>Chính sách đổi trả hàng</li>
                                                <li>Hướng dẫn sử dụng</li>
                                    </ul>
                              </div>
                              <div class="col-md-3">
                                    <div class="footer-title">Hotline Liên hệ: </div>
                                    <div class="footer-phone">
                                          <div class="footer-phone-left">
                                                <img src="{{ url('../gallery/icon/icon-telephone.png') }}" alt="">
                                          </div>
                                          <div class="footer-phone-right">
                                                0965.565.742
                                          </div>
                                    </div>
                                    <div class="footer-mxh">
                                          <h4>Kết nối với chúng tôi</h4>
                                          <ul>
                                                <li><a href="{{ route('index') }}"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="{{ route('index') }}"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="{{ route('index') }}"><i class="fa fa-envelope"></i></a></li>
                                                <li><a href="{{ route('index') }}"><i class="fa fa-phone"></i></a></li>
                                                <li><a href="{{ route('index') }}"><i class="fa fa-linkedin-square"></i></a></li>
                                          </ul>
                                    </div>
                              </div>
                              <div class="col-md-3 list-city">
                                    <div class="footer-title">Hệ thống cửa hàng</div>
                                    <ul>
                                          <li>
                                                <p><strong>Trụ sở Tp. Bắc ninh</strong></p>
                                                Thông lương, Tri Phương, Tiên Du, Bắc Ninh
                                          </li>
                                          <li>
                                                <p><strong>Trụ sở Tp. Hà nội</strong></p>
                                                218 Lĩnh Nam, Hoàng Mai, Hà Nội
                                           </li>
                                    </ul>
                              </div>
                        </div>
                  </div>
            </section>
            <section class="ab-footer">
                  <div class="container">
                        <div class="row">
                              <div class="col-md-6">
                                    © 2018 - Bản quyền thuộc về Babyshop
                              </div>
                        </div>
                  </div>
            </section>
      </footer>
      
</body>
</html>