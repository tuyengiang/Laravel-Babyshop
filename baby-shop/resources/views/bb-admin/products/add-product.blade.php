@extends('../template-custom.template-admin')
@section("admin-title")
      Thêm sản phẩm - Babyshop
@endsection

@section("title-box")
      Thêm sản phẩm mới
@endsection
@section("admin-main")
      {{ Form::open() }}
           <div class="col-md-8">
                  <div class="form-group">
                        {{ Form::label('id_product','Mã sản phẩm',['class'=>'form-content']) }}
                        {{ Form::text('id_product','',['class'=>'form-control','placeholder'=>'Nhập mã sản phẩm','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('name_product','Tên sản phẩm',['class'=>'form-content']) }}
                        {{ Form::text('name_product','',['class'=>'form-control','placeholder'=>'Nhập tên sản phẩm','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('count','Số lượng sản phẩm',['class'=>'form-content']) }}
                        {{ Form::number('count','',['class'=>'form-control','placeholder'=>'Số lượng sản phẩm','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('date_add','Ngày nhập hàng',['class'=>'form-content']) }}
                        {{ Form::date('date_add','',['class'=>'form-control','placeholder'=>'Ngày nhập hàng','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('price','Giá bán',['class'=>'form-content']) }}
                        {{ Form::number('price','',['class'=>'form-control','placeholder'=>'Giá bán','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('price_sale','Giá bán khuyến mại (Nếu có)',['class'=>'form-content']) }}
                        {{ Form::number('price_sale','',['class'=>'form-control','placeholder'=>'Giá khuyến mại','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('content','Miêu tả sản phẩm',['class'=>'form-content']) }}
                        {{ Form::textarea('content','',['class'=>'form-control','placeholder'=>'Miêu tả sản phẩm','id'=>'mytextarea','required'=>'true']) }}
                  </div>
           </div>
           <div class="col-md-4">
                  <div class="form-group">
                        {{ Form::label('text','Cập nhật sản phẩm',['class'=>'form-content']) }}<br>
                        {{ Form::submit('Thêm sản phẩm',['class'=>'btn btn-success']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('images','Hình ảnh sản phẩm',['class'=>'form-content']) }}<br>
                        <div class="images_loads" style="width:100%; height:200px; margin:10px 0 10px 0; border:1px solid #ddd;">
                              <img id="output">
                              <script>
                                    var loadFile = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                    };
                              </script>
                        </div>
                        {{ Form::file('images',['class'=>'form-control','onchange'=>'loadFile(event)']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('images','Album hình ảnh sản phẩm',['class'=>'form-content']) }}<br>
                        <div class="images_loads" style="width:100%; height:200px; margin:10px 0 10px 0; border:1px solid #ddd;">
      
                        </div>
                        {{ Form::file('images_is[]',['class'=>'form-control','multiple'=>'']) }}
                   </div>
           </div>
      {{ Form::close() }}
@endsection