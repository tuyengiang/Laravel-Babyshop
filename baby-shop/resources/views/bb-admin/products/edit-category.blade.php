@extends('../template-custom.template-admin')
@section("admin-title")
      Chỉnh sửa danh mục sản phẩm - Babyshop
@endsection

@section("title-box")
      Danh mục: {{ $edit->name_category }}
@endsection
@section("admin-main")
      {{ Form::model($edit,[
            'route'=>['update_category',$edit->id],'method'=>'PUT'
      ]) }}
            <div class="col-md-12">
                  @if(count($errors)>0)
                        <div class="alert alert-danger error">
                               <strong>Đã có lỗi xảy ra: </strong> <br><br>
                               <ul>
                                     @foreach($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                     @endforeach
                               </ul>
                         </div>
                  @endif
                  @if(Session::has('flash'))
                         <div class="alert alert-success success-flash">{{ Session::get('flash') }}</div>
                  @endif
            </div>
           <div class="col-md-4">
                  <div class="form-group">
                        {{ Form::label('title','Mã danh mục',['class'=>'form-content']) }}
                        {{ Form::text('id_category',NULL,['class'=>'form-control','placeholder'=>'Nhập mã danh mục','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::label('title','Tên danh mục',['class'=>'form-content']) }}
                        {{ Form::text('name_category',NULL,['class'=>'form-control','placeholder'=>'Nhập tên danh mục','required'=>'true']) }}
                        <p>Note: Tên danh mục không được quá 50 ký tự !!!</p>
                  </div>
                  <div class="form-group">
                        {{ Form::label('title','Đường dẫn danh mục',['class'=>'form-content']) }}
                        {{ Form::text('slug',NULL,['class'=>'form-control','placeholder'=>'Ví dụ: baby-shop','required'=>'true']) }}
                  </div>
                  <div class="form-group">
                        {{ Form::submit('Sửa danh mục',['class'=>'btn btn-success']) }}
                  </div>
           </div>
      {{ Form::close() }}
           <div class="col-md-8">
                  <h4>Danh sách danh mục sản phẩm</h4>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="table-responsive">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                  <tr>
                                      <th>Mã danh mục</th>
                                      <th>Tên danh mục</th>
                                      <th>Slug</th>
                                      <th>Option</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($category as $cate)
                                      <tr>
                                         <td>{{ $cate->id_category }}</td>
                                         <td>{{ $cate->name_category }}</td>
                                         <td>{{ $cate->slug }}</td>
                                         <td>
                                             <a href="{{ route('edit_category',$cate->id) }}" class="btn btn-success"><i class="fa fa-edit"></i> Sửa</a>
                                              {{ Form::open([
                                                    'route'=>['delete_category',$cate->id],'method'=>'delete','style'=>'display:inline'
                                              ]) }}
                                                 <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không? '); "><i class="fa fa-trash"></i> Xóa</button>

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