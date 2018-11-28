@extends('../template-custom.template-admin')
@section("admin-title")
     Danh sách bài viết
@endsection

@section("title-box")
      Danh sách bài viết
@endsection
@section("admin-main")
      @include('../../notification')
      <div class="col-md-12">
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="table-responsive">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                  <tr>
                                      <th>Stt</th>
                                      <th>Hình ảnh</th>
                                      <th>Tên bài viết</th>
                                      <th>Đường dẫn</th>
                                      <th>Chuyên mục</th>
                                      <th>Option</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($post as $p)
                                      <tr>
                                         <td>{{ $p->id }}</td>
                                         <td style="width:15%;height:70px;"><img src="{{ url('gallery/images_posts',$p->images) }}" alt="{{ $p->title }}"></td>
                                         <td>{{ $p->title }}</td>
                                         <td>{{ $p->slug }}</td>
                                         <td>{{ $p->name }}</td>
                                         <td>
                                             <a href="{{ route('show-edit-posts',$p->id) }}" class="btn btn-success"><i class="fa fa-edit"></i> Sửa</a>
                                              {{ Form::open([
                                                    'route'=>['delete-posts',$p->id],'method'=>'delete','style'=>'display:inline'
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
      <div class="col-md-12">
            <a href="{{ route('add-post') }}" class="btn btn-primary">Thêm bài viết</a>
      </div>
@endsection