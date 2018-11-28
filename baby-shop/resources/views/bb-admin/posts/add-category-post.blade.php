@extends('../template-custom.template-admin')
@section("admin-title")
      Chuyên mục bài viết
@endsection

@section("title-box")
      Thêm chuyên mục
@endsection
@section("admin-main")
      @include('../../notification')
      <div class="col-md-4">
            {{ Form::open(['route'=>'add-category-post','method'=>'POST']) }}
                  <div class="form-group">
                        {{ Form::label('title','Tên chuyên mục',['class'=>'form-content']) }}
                        {{ Form::text('title','',['class'=>'form-control','placeholder'=>'Nhập tên chuyên mục','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('title','Đường dẫn',['class'=>'form-content']) }}
                        {{ Form::text('slug','',['class'=>'form-control','placeholder'=>'Ví dụ: baby-shop','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('title','Nội dung miêu tả',['class'=>'form-content']) }}
                        {{ Form::textarea('content','',['class'=>'form-control','placeholder'=>'Nhập nội dung miêu tả','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::submit('Thêm chuyên mục',['class'=>'btn btn-success']) }}
                  </div>

            {{ Form::close() }}
      </div>
      <div class="col-md-8">
                  <h4>Danh sách chuyên mục bài viết</h4>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="table-responsive">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                  <tr>
                                      <th>Stt</th>
                                      <th>Tên chuyên mục</th>
                                      <th>slug</th>
                                      <th>Option</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($category as $we)
                                      <tr>
                                         <td>{{ $we->id }}</td>
                                         <td>{{ $we->title }}</td>
                                         <td>{{ $we->slug }}</td>
                                         <td>
                                             <a href="{{ route('edit-category-post',$we->id) }}" class="btn btn-success"><i class="fa fa-edit"></i> Sửa</a>
                                              {{ Form::open([
                                                    'route'=>['delete-category-post',$we->id],'method'=>'delete','style'=>'display:inline'
                                              ]) }}
                                                 <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa danh mục không? '); "><i class="fa fa-trash"></i> Xóa</button>

                                              {{ Form::close() }}
                                          </td>
                                       </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
      </div>
@endsection