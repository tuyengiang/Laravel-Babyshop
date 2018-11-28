<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('admin-title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ url('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet" href="{{ url('admin/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin/dist/css/skins/_all-skins.min.css') }}">
  <link href="{{ url('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('font-icon/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{  url('admin/table/dataTables.bootstrap.min.css') }}">
  <script src="{{ url('js/jquery.js') }}"></script>
  <script src="{{ url('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ url('js/main.js') }}"></script>
  <script>
        tinymce.init({
            editor_selector : "mceEditor",
            selector: '#mytextarea',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools responsivefilemanager'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | responsivefilemanager',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            external_filemanager_path:"{{ url('filemanager/') }}",
            filemanager_title:"Responsive Filemanager" ,
            external_plugins: { "filemanager" : "{{ url('filemanager/plugin.min.js') }}"}
         });
    </script>
    <style>
        .pull-left.image {
            width: 29% !important;
            height: 57px;
            margin-right: 10px !important;
        }
        .pull-left.image img {
            max-width: 100% !important;
            height: 100%;
            object-fit:cover;
        }   
        .user-panel>.info {
            left: 70px !important;
        }
        section.content-header {
            margin: 0 0 30px 0;
        }
        .sidebar-collapse .pull-left.image {
            width: 100% !important;
            height: 30px;
            margin-right: 10px !important;
        }
        .error ul li{
          list-style:none; !important;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="{{ route('index') }}" class="logo">
      <span class="logo-mini"><b>B</b>BS</span>
      <span class="logo-lg"><b>Baby</b>Shop</span>
    </a>
    @include('template-parts.toogle-bar')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('gallery/user/tuyengiang.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Tuyển Giảng</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Bảng điều khuyển</li>
        <li class="active treeview menu-open">
          <a href="{{ route('show_admin') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ route('add-post') }}">
            <i class="fa fa-thumb-tack"></i>
            <span>Bài viết</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('show_posts') }}"><i class="fa fa-circle-o"></i> Tất cả bài viết</a></li>
            <li><a href="{{ route('add-post') }}"><i class="fa fa-circle-o"></i> Thêm bài viết mới</a></li>
            <li><a href="{{ route('show-category-post') }}"><i class="fa fa-circle-o"></i> Chuyên mục</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="{{ route('show_admin') }}">
            <i class="fa fa-plus"></i>
            <span>Sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('show-product') }}"><i class="fa fa-circle-o"></i> Tất cả sản phẩm</a></li>
            <li><a href="{{ route('add-product') }}"><i class="fa fa-circle-o"></i> Thêm sản phẩm mới</a></li>
            <li><a href="{{ route('add-category') }}"><i class="fa fa-circle-o"></i> Danh mục sản phẩm</a></li>
            <li><a href="{{ route('show_terms') }}"><i class="fa fa-circle-o"></i> Term danh mục sản phẩm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="{{ route('show_admin') }}">
                <i class="fa fa-edit fa-fw"></i>
            <span>Đơn hàng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('show_admin') }}"><i class="fa fa-circle-o"></i> Tất cả đơn hàng</a></li>
            <li><a href="{{ route('show_admin') }}"><i class="fa fa-circle-o"></i> Đơn hàng đã xử lý</a></li>
          </ul>
        </li>
        <li class="treeview">
            <a href="{{ route('add_weight') }}">
                  <i class="fa fa-cog fa-fw"></i>
              <span>Cài đặt</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('add_weight') }}"><i class="fa fa-circle-o"></i> Thêm cân nặng</a></li>
            </ul>
          </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user fa-fw"></i><span>Tài khoản</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('show_admin') }}"><i class="fa fa-circle-o"></i> Thêm tài khoản mới</a></li>
            <li><a href="{{ route('show_admin') }}"><i class="fa fa-circle-o"></i> Quản lý tài khoản</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="{{ route('show_admin') }}">
            <i class="fa fa-pie-chart fa-fw"></i>  <span>Thống kê</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background:#fff;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title-box')
      </h1>
    </section>
    <section class="content">
        <div class="row">
             @yield('admin-main')
        </div>
    </section>
   
  </div>

  <!-- Seutp -->
  @include('template-parts.setup')
  <!-- /.control-sidebar -->


  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ url('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('admin/dist/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{ url('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ url('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ url('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('admin/bower_components/chart.js/Chart.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('admin/dist/js/pages/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('admin/dist/js/demo.js') }}"></script>
<script src="{{  url('admin/dist/js/sb-admin-2.js') }}"></script>
    <script type="text/javascript" src="{{  url('admin/table/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{  url('admin/table/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
