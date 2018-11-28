@extends('../template-custom.template-admin')
@section("admin-title")
      Sửa bài viết - Babyshop
@endsection

@section("title-box")
      Sửa bài viết {{ $post->title }}
@endsection
@section("admin-main")
      @include('../../notification')
      {{ Form::model($post,[
            'route'=>['update-posts',$post->id],'method'=>'PUT','enctype'=>'multipart/form-data'
      ]) }}
           <div class="col-md-8">
                  <div class="form-group">
                        {{ Form::label('title','Tên bài viết',['class'=>'form-content']) }}
                        {{ Form::text('title',NULL,['class'=>'form-control','placeholder'=>'Nhập tên bài viết']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('title','Đường dẫn bài viết',['class'=>'form-content']) }}
                        {{ Form::text('slug',NULL,['class'=>'form-control','placeholder'=>'Ví dụ : baby-shop']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('content','Nội dung bài viết',['class'=>'form-content']) }}
                        {{ Form::textarea('content',NULL,['class'=>'form-control','placeholder'=>'Nội dung bài viết','id'=>'mytextarea']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('content','Nội dung tóm tắt',['class'=>'form-content']) }}
                        {{ Form::textarea('excerpt',NULL,['class'=>'form-control','placeholder'=>'Nội dung tóm tắt','id'=>'mytextarea']) }}
                  </div>
           </div>
           <div class="col-md-4">
                  <div class="form-group">
                        {{ Form::label('title','Cập nhật bài viết',['class'=>'form-content']) }}
                        <br>
                        {{ Form::submit('Sửa bài viết',['class'=>'btn btn-success']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('content','Chuyên mục',['class'=>'form-content']) }}
                        <select name="id_category" class="form-control">
                              <option>--- Chọn chuyên mục ---</option>
                              @foreach($category as $a)
                                    <option @if(($a->id) == ($post->id_category)) {{ "selected" }} @endif value="{{ $a->id }}">{{ $a->title }}</option>
                              @endforeach 
                        </select>
                  </div>
                  <div class="form-group">
                        {{ Form::label('title','Ảnh đại diện',['class'=>'form-content']) }}
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
           </div>
      {{ Form::close() }}
@endsection